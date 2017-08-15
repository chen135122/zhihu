<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request){
//        \Auth::loginUsingId(5);
        $model = $this->getModelName($request->get('type'));
        $data =  Comment::create([
            'commentable_id' => $request->get('commentable_id'),
            'commentable_type' => $model,
            'user_id' => $request->get('user_id'),
            'body' => $request->get('body'),
            'parent_id' => $request->get('parent_id')
        ]);
        $comment = array(
            'id' =>$data->id,
            'user_id' => $data->user_id,
            'body' => $data->body,
            'parent_id' => $data->parent_id,
            'parent_name'=> User::find(Comment::find($data->parent_id)['user_id'])['name'],
            'created_at' => $data->created_at,
            'name' => $data->user->name,
            'avatar' => $data->user->avatar
        );
        return response()->json(
            ['comment' => $comment]
        );
    }

    public function save(Request $request){

        $model = $this->getModelName($request->get('type'));
        Comment::create([
            'commentable_id' => $request->get('commentable_id'),
            'group_id' => $request->get('group_id'),
            'commentable_type' => $model,
            'user_id' => \Auth::user()->id,
            'body' => $request->get('body'),
            'parent_id' => $request->get('parent_id')
        ]);
        return redirect()->back();
    }

    public function getModelName($type){
        $result = 'App\Answer';
        if($type == 'article' ){
            $result = 'App\Article';
        }
        if($type == 'question'){
            $result = 'App\Question';
        }
        return $result;
    }

    public function show(Request $request){
    $type = $this->getModelName($request->get('type'));
    $data = Comment::where([
        'commentable_type'=>$type,
        'commentable_id'=>$request->get('commentable_id'),
        'parent_id'=>$request->get('parent_id'),
        'group_id'=>$request->get('group_id')
    ])->get();
    return $data;
}

    public function showSecondComment(Request $request){
        $type = $this->getModelName($request->get('type'));
        $data = Comment::where([
            'commentable_type'=>$type,
            'commentable_id'=>$request->get('commentable_id'),
//            'parent_id'=>$request->get('parent_id'),
            'group_id'=>$request->get('group_id')
        ])->get();
        $secondComments = array();
        foreach($data as $list){
            $secondComment = array(
                'id' =>$list->id,
                'user_id' => $list->user_id,
                'body' => $list->body,
                'parent_id' => $list->parent_id,
                'parent_name'=> User::find(Comment::find($list->parent_id)['user_id'])['name'],
                'created_at' => $list->created_at,
                'name' => $list->user->name
            );
            array_push($secondComments,$secondComment);
        }
        return response()->json([
            'secondComments' => $secondComments
        ]);
    }

    public function showComment(Request $request){
        $comments = array();
        $type = $this->getModelName($request->get('type'));
        $data = Comment::where([
            'commentable_type' => $type,
            'commentable_id' => $request->get('commentable_id'),
        ])->get();
        foreach($data as $list){
            $comment =array(
                'id' =>$list->id,
                'user_id' => $list->user_id,
                'body' => $list->body,
                'parent_id' => $list->parent_id,
                'parent_name'=> User::find(Comment::find($list->parent_id)['user_id'])['name'],
                'created_at' => $list->created_at,
                'name' => $list->user->name,
                'avatar' => $list->user->avatar
            );
            array_push($comments,$comment);
        }
        return response()->json(
            ['comments'=>$comments]
        );
    }

}
