<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/9
 * Time: 11:43
 */

namespace App\Repositories;

use App\Question;

class QuestionRepository
{
    public function byId($id){
        return Question::find($id);
    }
}