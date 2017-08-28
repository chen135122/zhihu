<?php

namespace App\Http\Controllers;


use App\Article;
use App\ArticleType;
use App\Jobs\SendEmail;
use App\Markdown\Markdown;
use ChristofferOK\LaravelEmojiOne\LaravelEmojiOne;
use ChristofferOK\LaravelEmojiOne\LaravelEmojiOneFacade;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $markdown;

    public function __construct(Markdown $markdown)
    {
        $this->markdown = $markdown;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Article::where('type',2)->first();
        return view('mark',compact('data'));
    }

    public function Ip(){
        var_dump(\Illuminate\Support\Facades\Request::getClientIp());
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
    public function show()
    {
        $article = Article::find(47);

        $text = $article->body;

        $body = $this->markdown->markdown($text);

        return view('mark',compact('body'));
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

    public function queue(){
        $user = \Auth::loginUsingId(5);
        $this->dispatch(new SendEmail($user));
    }
}
