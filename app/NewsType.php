<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $fillable = [
      'name','parent_id'
    ];

    public function news(){
        return $this->hasMany('App\News');
    }
}
