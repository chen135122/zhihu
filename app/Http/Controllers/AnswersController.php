<?php

namespace App\Http\Controllers;

use App\Repositories\AnswerRepository;
use Illuminate\Http\Request;
use Auth;

class AnswersController extends Controller
{

    protected $answer;
    public function __construct(AnswerRepository $answer)
    {
        $this->answer =$answer;
    }

    public function store(Request $request,$id){
//        dd($request->all());
        $answer = $this->answer->create([
            'question_id'=>$id,
            'user_id'=>Auth::id(),
            'body'=>$request->get('body'),
        ]);
        $answer->question->increment('answers_count');
        return back();
    }
}
