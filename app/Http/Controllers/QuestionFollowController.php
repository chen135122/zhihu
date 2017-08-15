<?php

namespace App\Http\Controllers;

use App\Notifications\News;
use App\Question;
use Illuminate\Http\Request;
use Auth;

class QuestionFollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function follow($questionId){
        $question = Question::where('id',$questionId)->first();
        Auth::user()->notify(new News($question));
        Auth::user()->followThis($questionId);
        return back();
    }
}
