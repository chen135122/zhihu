<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =[
      'type_id','topic','sub_topic','publish_date','content'
    ];

    public function newstype(){
        return $this->belongsTo('App\NewsType','type_id');
    }
}
