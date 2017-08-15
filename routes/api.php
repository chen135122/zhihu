<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/topics', function (Request $request) {
    $topics = App\Topic::select(['id','name'])
        ->where('name','like','%'.$request->query('q').'%')
        ->get();
    return $topics;
});
Route::middleware('auth:api')->post('/question/follower', function (Request $request) {
    $user = Auth::guard('api')->user();
    $followed = $user->followed($request->get('question'));
    if($followed){
        return response()->json(['followed'=>true]);
    }
    return response()->json(['followed'=>false]);
});
Route::middleware('auth:api')->post('/question/follow', function (Request $request) {
    $user = Auth::guard('api')->user();
    $question = App\Question::find($request->get('question'));
//    Auth::user()->notify(new \App\Notifications\News($question));
    $followed = $user->followThis($question->id);
    if(count($followed['detached']) > 0){
        $user->notify(new \App\Notifications\Test());
        $question->decrement('follows_count');
        return response()->json(['followed'=>false]);
    }
    $question->increment('follows_count');
    return response()->json(['followed'=>true]);
});
Route::middleware('auth:api')->get('/user/followed/{id}','UserFollowController@index');
Route::middleware('auth:api')->post('/user/follow','UserFollowController@follow');
Route::post('/androidRegister','AndroidController@index');
Route::post('/androidLogin','AndroidController@show');
Route::get('/androidShow',function (){
   return json_encode(\App\AndroidUser::all());
});
Route::post('/upload','AndroidController@upload');
Route::get('/showQuestions','AndroidController@questions');
Route::post('/comment','CommentsController@store');
Route::post('/comments','CommentsController@show');
Route::post('/second/comment','CommentsController@showSecondComment');
Route::post('/test','CommentsController@showComment');