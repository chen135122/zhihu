<?php

namespace App;

use Bican\Roles\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;

class User extends Authenticatable implements HasRoleAndPermissionContract
{
    use Notifiable,HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','confirmation_token','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function owns(Model $model){
        return $this->id == $model->user_id;
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
    public function answers(){
        return $this->belongsToMany(Answer::class);
    }
    public function follows(){
        return $this->belongsToMany(Question::class,'user_question')->withTimestamps();
    }

    public function followThis($questionId){
        return $this->follows()->toggle($questionId);
    }
    public function followed($questionId){
        return !! $this->follows()->where('question_id',$questionId)->count();
    }
    public function followers(){
        return $this->belongsToMany(self::class,'followed','follower_id','followed_id')->withTimestamps();
    }
    public function followersUser(){
        return $this->belongsToMany(self::class,'followed','followed_id','follower_id')->withTimestamps();
    }
    public function followThisUser($user){
        return $this->followers()->toggle($user);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
