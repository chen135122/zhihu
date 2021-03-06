<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('id',\Auth::id())->first();
        return view('person.information',compact('data'));
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
        User::where('id',\Auth::id())->update(['name'=>$request->get('name')]);
        return redirect()->route('personInformation');
    }

    public function showList(){
        $data = User::all();
        return view('person.list',compact('data'));
    }

    public function save(Request $request){
        $data = $request->get('image');
        $url = explode(',',$data);
        $name = md5(time());
        file_put_contents('./img/avatars/'.$name.'.jpg', base64_decode($url[1]));//返回的是字节数
        User::where('id',\Auth::id())
            ->update(['avatar'=> '/img/avatars/'.$name.'.jpg']);
        $attr = array(
            'result' => true,
            'file' => '/img/avatars/'.$name.'.jpg'
        );
        return json_encode($attr);
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
