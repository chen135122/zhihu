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
    $data = \App\ArticleType::latest()->get();
    return view('home.blog',compact('data'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);
Route::resource('questions','QuestionsController',['name'=>[
        'create' => 'question.create',
        'show' => 'question.show',
]]);
//Route::get('/github','LoginController@login');
//Route::post('/login','LoginController@githubLogin');
Route::get('/mk',function (){
    return view('home.index');
});
Route::post('/question/{question}/answer','AnswersController@store');
Route::get('/question/{question}/follow','QuestionFollowController@follow');

Route::get('/community','CommunityController@index');
Route::post('/test',function (\Illuminate\Http\Request $request){
    echo '<pre>'.$request->get('content').'</pre>';
});
Route::get('/mark','TestController@index');
Route::get('/comment',function(){
    return view('home.test');
});

Route::get('/article/create','ArticleController@index');
Route::post('/article/create','ArticleController@store');
Route::get('/article/list','ArticleController@showList')->name('articleList')->middleware('auth','role:admin');
Route::get('/article/show','ArticleController@showAll')->name('articleAll');
Route::get('/article/type','ArticleController@type')->name('articleType');
Route::get('/article/type/add','ArticleController@typeAdd')->name('articleTypeAdd');
Route::post('/article/type/add','ArticleController@typeAddStore');
Route::get('/article/type/{id}','ArticleController@typeId')->where('id','[0-9]+');
Route::get('/article/{id}','ArticleController@showOne')->where('id','[0-9]+');


Route::get('/back','BackController@index')->name('back');
Route::get('/back/question/list','BackController@questionList')->name('questionList');

Route::get('person/information','PersonController@index')->name('personInformation');
Route::get('person/list','PersonController@showList')->name('personList')->middleware('auth','role:admin');
Route::post('person/store','PersonController@store');
Route::post('person/save','PersonController@save');


Route::get('/roles/all','RoleController@index')->name('rolesAll');
Route::get('/roles/add','RoleController@showAdd')->name('showAdd');
Route::post('/roles/add','RoleController@store');

Route::post('/comment','CommentsController@save');
Route::post('/articleType',function(\Illuminate\Http\Request $request){
    dd($request->get('types'));
});

Route::get('/notify',function(){
    $user = Auth::loginUsingId(5);
    $user->notify(new \App\Notifications\Test());
});
Route::get('/group',function (){
    $collection = \App\Comment::all()->groupBy('parent_id');
    $collection['root'] = $collection[''];
    unset($collection['']);
    return view('test4',compact('collection'));
//    return $data;
});

Route::get('/queue','TestController@queue');
Route::get('/showRedis',function (){
    Redis::set('name','chen');
    return Redis::get('name');
});
Route::get('/cast',function(){
//    $name = Redis::get('name');
//    Auth::loginUsingId(5);
//    $user = \App\User::find(9);
//    event(new \App\Events\SendMessage($user));
    return view('socket',compact('user'));
});

Route::get('/email',function(){
    $path = app_path('Http/Controllers/Controller.php');
    return $path;
});

Route::get('/live','LiveController@index');
Route::get('/ip',function(){
    $address = \Zhuzhichao\IpLocationZh\Ip::find(\Illuminate\Support\Facades\Request::getClientIp());
    $place = $address[0].$address[1].$address[2].$address[3];
    echo $place;
});

Route::get('/dashboard','DashboardController@index');
Route::get('/dashboard/newstype','DashboardController@newsType')->name('/newstype');
Route::get('/dashboard/alltype','DashboardController@allType');
Route::post('/dashboard/addfirsttype','DashboardController@addFirstType');
Route::post('/dashboard/modifyfirsttype','DashboardController@modifyFirstType');
Route::get('/dashboard/newstype/{id}','DashboardController@newsTypeId')->where(['id'=>'[0-9]+'])->name('/newsTypeId');
Route::get('/dashboard/deletetype/{id}','DashboardController@deleteTypeId')->where(['id'=>'[0-9]+'])->name('/deleteTypeId');
Route::get('/dashboard/newslist','DashboardController@newsList')->name('/newslist');
Route::post('/dashboard/addnews','DashboardController@addNews');
Route::get('/deletenews/{id}','DashboardController@deleteNews')->where(['id'=>'[0-9]+']);
Route::get('/modifynews/{id}','DashboardController@getNews')->where(['id'=>'[0-9]+']);
Route::post('/dashboard/modifynews','DashboardController@modifyNews');
Route::get('/dashboard/home','DashboardController@home');
Route::get('/dashboard/type/{id}','DashboardController@typeId')->where(['id'=>'[0-9]+']);
Route::get('/dashboard/news/{id}','DashboardController@newsId')->where(['id'=>'[0-9]+']);
