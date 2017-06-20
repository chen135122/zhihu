<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Overtrue\Socialite\SocialiteManager;

class LoginController extends Controller
{
    protected $config = [
        'github' => [
            'client_id'     => '478e67c0415cb4c2a270',
            'client_secret' => '2a32eef23c85f4c29691e616f75fa8ff9bce599b',
            'redirect'      => 'http://localhost/login',
        ],
    ];

    public function login(){
        $socialite = new SocialiteManager($this->config);
       return $socialite->driver('github')->redirect();
    }

    public function githubLogin()
    {
        $socialite = new SocialiteManager($this->config);
        $githubUser =  $socialite->driver('github')->user();
        User::create([
            'name' => $githubUser->getNickname(),
            'email' => $githubUser->getEmail(),
            'password' => bcrypt(str_random(16)),
            'avatar' => 1,
            'confirmation_token' =>0
        ]);
        return redirect('/');
    }
}
