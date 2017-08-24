<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Qiniu\Pili\Client;
use Qiniu\Pili\Mac;

class LiveController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(new Mac('1JgXNOyoQA2O-cQ7EId4I9nJpy6qSfP0dAfCLBMd','fqceCaHR7r4whj__JJSyuSeEuTr4FOkEk3v72MrW'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->client->hub('live-poorworm');
        $liveurl = \Qiniu\Pili\HDLPlayURL('pili-live-hdl.live.poorworm.cn', 'live-poorworm', 'live-stream');
//        return $liveurl;
        return view('test.index',compact('liveurl'));
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
