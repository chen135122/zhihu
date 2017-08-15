@extends('home.index')
@section('content')
    <div id="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2>博文分类</h2>
                        <img src="images/under-heading.png" alt="" >
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $list)
                    <a href="{{ url('/article/type/'.$list->id) }}">
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img class="img-responsive" style="width:100%;min-width: 350px;height: 240px" src="{{ $list->img }}" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4>{{ $list->name }}</h4>
                                        <span>{{ \Carbon\Carbon::parse($list->updated_at)->format('Y-m-d') }}</span>
                                    </div>
                                    <div class="content-hide">
                                        <p style="line-height: 20px;height: 60px;overflow: hidden;text-overflow:ellipsis;overflow : hidden;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{ $list->intro }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@stop