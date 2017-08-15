<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
        'title','author','cover_img','intro','body','type'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public  function articletype(){
        return $this->belongsTo(ArticleType::class,'type');
    }

    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }
}
