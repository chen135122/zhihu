@extends('layouts.header')
@section('content')
    <!-- 轮播广告 -->
    <div id="banner_tabs" class="flexslider" style="margin-bottom:0 ">
        <ul class="slides">
            <li>
                <a title="" target="_blank" href="#">
                    <img width="1000" height="482" alt="" style="width:100%;margin-left:-30px;background: url({{ URL::asset('img/banner1.jpg') }}) no-repeat center;" src="{{ URL::asset('img/alpha.png') }}">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img width="1000" height="482" alt="" style="width:100%;margin-left:-30px;background: url({{ URL::asset('img/banner2.jpg') }}) no-repeat center;" src="{{ URL::asset('img/alpha.png') }}">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img width="1000" height="482" alt="" style="width:100%;margin-left:-30px;background: url({{ URL::asset('img/banner3.jpg') }}) no-repeat center;" src="{{ URL::asset('img/alpha.png') }}">
                </a>
            </li>
        </ul>
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="javascript:;">Previous</a></li>
            <li><a class="flex-next" href="javascript:;">Next</a></li>
        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging" style="margin-left:45%;width:40%;">
            <li><a>1</a></li>
            <li><a>2</a></li>
            <li><a>2</a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row clearfix" style="margin-top: 30px">
            <div class="col-md-12 column">
                <div style="text-align: center;font-size: 30px">
                    博文分类
                </div>
                <hr>
                @foreach($data as $list)
                    <a href="{{ url('/article/type/'.$list->id) }}">
                        <div class="col-md-4 column">
                            <div class="article-img">
                                <img class="img-responsive" style="width:100%;min-width: 300px;height: 200px" src="{{ $list->img }}" />
                                <h3>
                                    {{ $list->name }}
                                </h3>
                                <p style="line-height: 20px;height: 60px;overflow: hidden;text-overflow:ellipsis;overflow : hidden;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                    {{ $list->intro }}
                                </p>
                            </div>
                        </div>
                    </a>
                    @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var bannerSlider = new Slider($('#banner_tabs'), {
                time: 5000,
                delay: 400,
                event: 'hover',
                auto: true,
                mode: 'fade',
                controller: $('#bannerCtrl'),
                activeControllerCls: 'active'
            });
            $('#banner_tabs .flex-prev').click(function() {
                bannerSlider.prev()
            });
            $('#banner_tabs .flex-next').click(function() {
                bannerSlider.next()
            });
        })
    </script>
@stop