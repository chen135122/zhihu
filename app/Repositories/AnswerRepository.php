<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/12
 * Time: 16:21
 */

namespace App\Repositories;
use App\Answer;


class AnswerRepository
{
    public function create(array $attributes){
        return Answer::create($attributes);
    }
}