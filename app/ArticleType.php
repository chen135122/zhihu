<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    protected $fillable= [
      'name','intro','img'
    ];
    public function Articles(){
        return $this->hasMany(Article::class);
    }
}
