<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    protected $fillable= [
      'name','intro','img'
    ];
    public function articles(){
        return $this->hasMany(Article::class,'type');
    }
}
