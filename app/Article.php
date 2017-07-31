<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
        'title','author','cover_img','intro','body'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public  function ArticleType(){
        return $this->belongsTo(ArticleType::class);
    }
}
