<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleType;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('articles.create');
    }
    public function store(Request $request){
//        $data = [
//            'title' => $request->get('title'),
//            'author' => $request->get('author'),
//            'cover_img' => $request->get('cover_img'),
//            'intro' => $request->get('introduce'),
//            'body' => $request->get('content')
//        ];
//        Article::create($data);
        $Parsedown = new \Parsedown();

        $content = $Parsedown->text($request->get('content'));
        return view('back.test',compact('content'));
//        return Markdown::convertToHtml('foo');
    }
    public function showList(){
        $data = Article::paginate(15);
        return view('articles.list',compact('data'));
    }
    public function showAll(){
        $data = Article::paginate(10);
        return view('articles.showAll',compact('data'));
    }
    public function showOne($id){
        $data = Article::find($id);
        return view('articles.showOne',compact('data'));
    }
    public function type(){
        $data = ArticleType::all();
        return view('articles.type',compact('data'));
    }
    public function typeAdd(){
        return view('articles.typeAdd');
    }
    public function typeAddStore(Request $request){
        ArticleType::create([
            'name' => $request->get('name'),
            'img' => $request->get('img'),
            'intro' => $request->get('intro')
        ]);
    }
    public function typeId($id){
        $data  = Article::where('type',$id)->paginate(10);
        return view('articles.articleType',compact('data'));
    }
}
