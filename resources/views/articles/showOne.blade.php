@extends('header')
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-10 col-md-offset-1 column">
                    <h2 class="text-center">
                        {{ $data->title }}
                    </h2>
                <p class="text-center">             {{--\Carbon\Carbon::parse($data->updated_at)->format('Y-m-d')--}}
                    由<mark>{{ $data->author }}</mark>发布于·{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans(\Carbon\Carbon::now()) }}
                </p>
            </div>
            <div class="col-md-9 col-md-offset-2 column my_markdown" style="box-shadow: 0px 0px 10px #5b5b5b;border-radius: 5px;padding:20px 40px">
                @emojione($content)
                <p id="share-1"></p>
            </div>
        </div>
            <div id="app" class="col-md-10 col-md-offset-2" style="margin-top: 50px">
                <blockquote class="col-md-11" style="margin-left: -8px;font-size:26px;border-left:5px solid #9aff02;background-color: #deffac ">评论区</blockquote>
                <div id="app2">
                    <comment type="article" commentable_id="{{ $data->id }}"  user_id="{{ Auth::user()->id }}" login="{{ Auth::check() }}" parent_id=""></comment>
                </div>
            </div>
        <div class="col-md-10 col-md-offset-2">
            @if(Auth::check())
                <form class="form-group" action="{{ url('/comment') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" value="{{ $data->id }}" name="commentable_id">
                    <input type="hidden" value="article" name="type">
                    <input type="hidden" value="" name="group_id">
                    <input type="hidden" value="" name="parent_id">
                    <textarea name="body" class="form-control" placeholder="快来发表评论吧>_<,支持MarkDown..." rows="3" required></textarea>
                    <button type="submit" class="btn btn-primary">发表评论</button>
                </form>
            @else
                <a href="{{ url('login') }}"><button class="btn form-control btn-block btn-primary">登录参与评论</button></a>
            @endif
        </div>
    </div>
    <script >hljs.initHighlightingOnLoad();</script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://apps.bdimg.com/libs/jquery/1.8.2/jquery.js"></script>
    <script src="{{ asset('js/jquery.share.min.js') }}"></script>
    <script>
        $('#share-1').share();
    </script>
@stop