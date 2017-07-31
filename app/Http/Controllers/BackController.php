<?php

namespace App\Http\Controllers;

use App\Article;
use App\Question;
use App\Role;
use App\Topic;
use App\User;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function __construct()
    {
        $this->middleware([
           'auth','role:admin'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'articles' => Article::all()->count(),
            'users' => User::all()->count(),
            'questions' => Question::all()->count(),
            'topics' => Topic::all()->count(),
            'roles' => \Bican\Roles\Models\Role::all()->count()
        ];
        return view('back.total',compact('data'));
    }

    public function questionList(){
        $data = Question::paginate(20);
        return view('questions.list',compact('data'));
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
