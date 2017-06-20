@extends('layouts.app')

@section('content')
    @include('vendor.ueditor.assets')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $question->title }}
                        @foreach($question->topics as $topic)
                            <button class="btn btn-info pull-right btn-xs">{{ $topic->name }}</button>
                        @endforeach
                    </div>

                    <div class="panel-body">
                        {!! $question->body !!}
                    </div>
                    <div class="action form-inline">
                        @if(Auth::check()&&Auth::user()->owns($question))
                            <span class="edit"><a href="/questions/{{ $question->id }}/edit">编辑</a></span>
                            <form class="form-group" action="/questions/{{ $question->id }}" method="post">
                                {!! csrf_field() !!}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-default btn-xs" type="submit">删除</button>
                            </form>
                        @endif
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $question->answers_count }} 个答案
                    </div>
                    <div class="panel-body">
                        @foreach($question->answers as $answer)
                            <div class="form-inline">
                                <img width="48" src="{{ $answer->user->avatar }}">
                                <div class="form-group">
                                    <a>{!! $answer->user->name !!}</a>
                                   {!! $answer->body !!}
                                </div>
                            </div>
                            @endforeach
                        @if(Auth::check())
                            <form action="/question/{{ $question->id }}/answer" method="post">
                            {{ csrf_field() }}
                            <script id="container" name="body" type="text/plain"></script>
                            <button type="submit" class="btn btn-success pull-right">评论</button>
                        </form>
                            @else
                            <a href="/login"><button class="btn btn-success btn-block">登录参与评论</button></a>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center">
                        <h1>{{ $question->follows_count }}</h1>
                        <br><h4 style="text-align: center">关注者</h4>
                    </div>
                    <div class="panel-body">
                        {{--<a href="/question/{{ $question->id }}/follow">--}}
                        {{--<button class="btn btn-default {{ Auth::user()->followed($question->id) ? 'btn-success':'' }}">--}}
                        {{--{{ Auth::user()->followed($question->id)? '已关注':'关注该问题' }}--}}
                        {{--</button>--}}
                        {{--</a>--}}
                        <div id="app">
                            <question-follow-button question="{{ $question->id }}"></question-follow-button>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="panel-title" style="text-align: center">
                            <h3>关于作者</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-4">
                            <div class="text-center">问题</div>
                            <div class="text-center">0</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">回答</div>
                            <div class="text-center">0</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">关注者</div>
                            <div class="text-center">0</div>
                        </div>
                    </div>
                    <div class="panel-footer" id="app2">
                        <user-follow-button :user="{{ $question->user_id }}"></user-follow-button>
                        <button class="btn btn-default pull-right">发送私信</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection