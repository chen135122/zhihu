<?php

namespace App\Http\Controllers;

use App\AttachFiles;
use App\News;
use App\NewsType;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function newsType(){
        $data = NewsType::select('id','name','parent_id')->get();
//        return $data;
//        foreach ($data as $value){
//            $value['pid'] = $value['parent_id'];
//            unset($value['parent_id']);
//        }
//        $data = json_encode($data,JSON_UNESCAPED_UNICODE);
//        return $data;
        return view('dashboard.newsList',compact('data'));
    }

    public function allType(){
        $data = NewsType::select('id','name','parent_id')->get();
//        return $data;
        foreach ($data as $value){
            $value['pid'] = $value['parent_id'];
            unset($value['parent_id']);
        }
        $data = json_encode($data,JSON_UNESCAPED_UNICODE);
        return response()->json([
            'data' => $data
        ]);
    }


    public function addFirstType(Request $request){
        $parent_id = $request->get('parent_id');
        $name = $request->get('name');
        NewsType::create([
            'name' => $name,
            'parent_id' => $parent_id
        ]);
        return redirect()->back();
    }

    public function newsTypeId($id){
        $data = NewsType::select('id','name','parent_id')->get();
        $info = NewsType::find($id);
        return view('dashboard.newsTypeId',compact('data','info'));
    }

    public function modifyFirstType(Request $request){
        $id = $request->get('id');
        $name = $request->get("name");
        NewsType::where(['id'=>$id])->update(['name'=>$name]);
        return redirect()->route('/newsTypeId',['id'=>$id]);
    }

    public function deleteTypeId($id){
        NewsType::find($id)->delete();
        $data = NewsType::select('id','name','parent_id')->get();
        return view('dashboard.newsList',compact('data'));
    }

    public function newsList(){
        $data = News::all();
        $type = NewsType::all();
        return view('dashboard.news',compact('data','type'));
    }

    public function addNews(Request $request){
        $topic = $request->get('topic');
        $sub_topic = $request->get('sub_topic');
        $type_id = $request->get('type_id');
        $content = $request->get('content');

        $files = $request->file('files');

        $disk = \Storage::disk('qiniu');
        $path_pre = 'http://orwi9xvus.bkt.clouddn.com/';
        $news = News::create([
            'topic' => $topic,
            'sub_topic' => $sub_topic,
            'type_id' => $type_id,
            'content' => $content
        ]);
        if(count($files)>0){
            foreach ($files as $value ){
                $path = $disk->put('files',$value);
                AttachFiles::create([
                    'news_id' => $news->id,
                    'filename' => $path_pre.$path
                ]);
            }
        }
        return redirect()->route('/newslist');
//        dd($content);
//        return $content;
    }

    public function deleteNews($id){
        News::find($id)->delete();
        return redirect()->route('/newslist');
    }

    public function getNews($id){
        $news = News::find($id);
        $files = AttachFiles::where('news_id',$id)->get();
        $news['type'] = $news->newstype->name;
        return response()->json([
            'success' => true,
            'news' => $news,
            'files' => $files
        ]);

    }

    public function modifyNews(Request $request){
//        dd($request->all());
        $id = $request->get('news_id');
        $topic = $request->get('topic');
        $sub_topic = $request->get('sub_topic');
        $type_id = $request->get('type_id');
        $content = $request->get('content');

        $files = $request->file('files');
        $disk = \Storage::disk('qiniu');
        $path_pre = 'http://orwi9xvus.bkt.clouddn.com/';
        News::where('id',$id)->update([
            'topic' => $topic,
            'sub_topic' => $sub_topic,
            'type_id' => $type_id,
            'content' => $content
        ]);
        if(count($files)>0){
            foreach ($files as $value ){
                $path = $disk->put('files',$value);
                AttachFiles::create([
                    'news_id' => $id,
                    'filename' => $path_pre.$path
                ]);
            }
        }
        return redirect()->route('/newslist');

    }

    public function home(){
        $data = NewsType::all();
        return view('dashboard.home',compact('data'));
    }

    public function typeId($id){
        $data = News::where('type_id',$id)->get();
        return view('dashboard.list',compact('data'));
    }

    public function newsId($id){
        $data = News::find($id);
        return view('dashboard.newscontent',compact('data'));
    }

    public function firstType(){
            $data = NewsType::where('parent_id',0)->get();
            if(count($data)<=0){
                return response()->json([
                    'error' => 1,
                ]);
            }
            foreach ($data as $value){
                unset($value['parent_id'],$value['created_at'],$value['updated_at']);
            }
            return response()->json([
                'error' => 0,
                'total' => count($data),
                'data' => $data
            ]);
    }

    public function Type($id){
        $data = NewsType::where('parent_id',$id)->get();
        if(count($data)<=0){
            return response()->json([
                'error' => 1,
            ]);
        }
        foreach ($data as $value){
            unset($value['parent_id'],$value['created_at'],$value['updated_at']);
        }
        return response()->json([
            'error' => 0,
            'total' => count($data),
            'data' => $data
        ]);
    }

    public function file($id){
        $data = AttachFiles::find($id);
        return $data->filename;
//        $ch = curl_init();
//
//        $timeout = 30;
//
//        curl_setopt($ch, CURLOPT_URL, $data->filename);
//
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
//        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//
//        $file_contents = curl_exec($ch);
//
//        curl_close($ch);
////        $file = file_get_contents($data->name,md5(time()));
//        echo  $file_contents;
//        return response()->download($data->filename);
//        $getcontent = file_get_contents($data->filename);
//        echo $getcontent;
    }

    public function newsPaginate(Request $request){
        $type_id = $request->get('type_id');
        $date = $request->get('date');
        $page = $request->get('page');
        $count = 2;
        $data = News::where('type_id',$type_id)->where('publish_date','>',$date)->offset(($page-1)*$count)->limit($count)->get();
        if(count($data)>0){
            return response()->json([
                'error' => 0,
                'total' => count($data),
                'data' => $data
        ]);
        }
        return response()->json([
            'error' => 1,
            'total' => 0,
            'data' => null
        ]);
    }

    public function newsById($id){
        $data = News::find($id);
        $list = AttachFiles::where('news_id',$id)->get();
        return response()->json([
            'topic' => $data->topic,
            'sub_topic' => $data->sub_topic,
            'publish_date' => $data->publish_date,
            'content' => $data->content,
            'attach_files' => $list
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
