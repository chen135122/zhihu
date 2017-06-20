<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Auth;
use App\User;


class UserFollowController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
//        dd($id);
        $user =$this->user->byId($id);
        $followers =$user->followersUser()->pluck('followed_id')->toArray();
        if(in_array(Auth::guard('api')->user()->id,$followers)){
            return response()->json(['followed'=>true]);
        }
        return response()->json(['followed'=>false]);
    }
    public function follow(){
        $userToFollow = $this->user->byId(request('user'));
        $followed = Auth::guard('api')->user()->followThisUser($userToFollow->id);

        if ( count($followed['attached']) > 0 ) {
            $userToFollow->increment('follows_count');

            return response()->json(['followed' => true]);
        }

        $userToFollow->decrement('follows_count');

        return response()->json(['followed' => false]);
    }
}
