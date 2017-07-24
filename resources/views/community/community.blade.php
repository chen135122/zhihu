@extends('layouts.header')
@section('content')
    <div class="container-fluid" style="padding: 0">
            <div style="background-color:#393e46;height: 300px;width: 100%;padding:0;text-align: center;">
                <div class="community-add">
                    <a href="{{ url('questions/create') }}"><button style="width: 250px;height: 60px;font-size: 28px" class="btn btn-info btn-large">发布新帖子</button></a>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="page-header text-center">
            <h1>最新帖子</h1>
        </div>
    </div>
    <div class="container">
        @foreach($questions as $question)
            <div class="row clearfix" style="margin-top: 30px">
                <div class="col-md-6 col-md-offset-2">
                    <div class="media">
                        <a href="#" class="pull-left"><img width="28px" src="{!! $question->user->avatar !!}" class="media-object" alt='' /></a>
                        <div class="media-body">
                            <h4 class="media-heading">
                               {{ $question->title }}
                            </h4><span style="overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">{{ $question->body }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pull-right" style="text-align: center;margin-top: 20px">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">
                                2
                            </h4>回复
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $questions->links() }}
@stop