<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.banner');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);
Route::resource('questions','QuestionsController',['name'=>[
        'create' => 'question.create',
        'show' => 'question.show',
]]);
//Route::get('/github','LoginController@login');
//Route::get('/login','LoginController@githubLogin');
//Route::get('/mk',function (){
//    return view('test');
//});
Route::post('/question/{question}/answer','AnswersController@store');
Route::get('/question/{question}/follow','QuestionFollowController@follow');
Route::get('/captcha', function () {
    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'), env('PRIVATE_KEY'));

    echo $captcha->GTServerIsNormal();
});