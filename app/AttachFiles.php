<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttachFiles extends Model
{
    protected $fillable=[
      'news_id','filename'
    ];
}
