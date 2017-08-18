<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


<head>
    <meta charset="utf-8">
    <title>PoorWorm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta name="toTop" content="true">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonails-slider.css') }}">
    <link href="../css/index.css" rel="stylesheet">
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="{{ Auth::check() ? 'Bearer '.Auth::user()->api_token : 'Bearer ' }}">
    <script src="http://api.geetest.com/get.php"></script>
    {!! editor_css() !!}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">

    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-2.6.1-respond-1.1.0.min.js') }}"></script>

    <link href="../css/my-markdown.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/share.min.css') }}">
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="#/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<nav class="navbar navbar-inverse navbar-fixed-top" style="z-index:99">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}"><p class="nav-header">PoorWorm</p></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i><span>首页</span></a></li>
                <li><a href="{{ url('questions') }}"><i class="fa fa-video-camera" aria-hidden="true"></i><span>社区</span></a></li>
                <li><a href="{{ route('articleAll') }}"><i class="fa fa-book" aria-hidden="true"></i><span>博文</span></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" style="margin-top: 0px" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}"><span>登录</span></a></li>
                    <li style="margin-left:0"><a href="{{ route('register') }}"><span>注册</span></a></li>
                @else
                    <li><i class="fa fa-bell" aria-hidden="true" style="color: #f78e21"></i></li>
                    <li id="img-change"><img width="36" style="border-radius:50% " src="{{ Auth::user()->avatar }}" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ url('person/information') }}"><i class="fa fa-user" aria-hidden="true"></i>个人信息</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>收藏列表</a></li>
                            @role('admin')
                            <li><a href="{{ route('back') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>后台首页</a></li>
                            @endrole
                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i>修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    退出登录
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div style="margin-top: 59px">
    @yield('content')
</div>


@include('layouts.footer')
<script type="text/javascript" src="{{ asset('js/toTop.js') }}"></script>
</body>
</html>