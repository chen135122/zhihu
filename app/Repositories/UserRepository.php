<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 10:40
 */

namespace App\Repositories;
use App\User;


class UserRepository
{
    public function byId($id){
        return User::find($id);
    }
}