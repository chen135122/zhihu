<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AndroidUser extends Model
{
    protected $fillable=[
      'email','password','avatar'
    ];
}
