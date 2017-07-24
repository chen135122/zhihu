<?php

namespace App\Http\Controllers;

use App\AndroidUser;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AndroidController extends Controller
{
    public function index(Request $request){
        $user = AndroidUser::where('email',$request->get('email'))->first();
        if(is_null($user)){
            $data = [
                'success' => false,
                'msg' => '注册失败!',
                'info' => '邮箱已被注册!'
            ];
            return json_encode($data);
        }else{
            AndroidUser::create([
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('pass')),
                'avatar' => 'http://orwi9xvus.bkt.clouddn.com/head_default.jpg'
            ]);
            $data = [
                'success' => true,
                'msg' =>'注册成功！'
            ];
            return json_encode($data);
        }
    }
    public function show(Request $request){
        $user = AndroidUser::where('email',$request->get('email'))->first();
        if(is_null($user)){
            $data = [
                'success' => false,
                'msg' => '登录失败!',
                'info' => '邮箱尚未注册!'
            ];
            return json_encode($data);
        }
        if(Hash::check($request->get('pass'),$user->password)){
            $data = [
                'success' => true,
                'id' =>$user->id,
                'email' => $user->email,
                'avatar' => $user->avatar
            ];
            return json_encode($data);
        }
        $data = [
            'success' => false,
            'msg' => '登录失败!',
            'info' => '密码错误!'
        ];
        return json_encode($data);
    }
    public function upload(Request $request){
        $disk = Storage::disk('qiniu');
        $name = md5(time()).'jpg';

// create a file
        $path_pre = 'http://orwi9xvus.bkt.clouddn.com/';
        $path = $disk->put('avatars', $request->file('avatar'));

//        $name = md5(time()).'jpg';
//        Storage::disk('qiniu')->put($name, $request->file('avatar'), 'public');

       //$path = $request->file('avatar')->store('avatars');
//        $data = [
//            'email' => $request->get('email'),
//            'name' => $path
//        ];
//        $contents = $path->listContents();
//        return json_encode($data);

//        foreach ($contents as $object) {
//            return $object['path'];
//        }
        $data = [
            'email' => $request->get('email'),
            'name' => $path_pre.$path
        ];
        AndroidUser::where('email',$request->get('email'))
            ->update([
                'avatar' => $path_pre.$path
            ]);
        return json_encode($data);
    }
    public function questions(){
        return response()->json([
            'article_data' => Question::all()
        ]);
    }
}
