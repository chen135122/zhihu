<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('img/pexels-photo-463684.ico') }}"/>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="{{ Auth::check() ? 'Bearer '.Auth::user()->api_token : 'Bearer ' }}">
    <script src="http://api.geetest.com/get.php"></script>
    <title>PoorWorm</title>
</head>
<body>
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
                <li><a href="show"><i class="fa fa-home" aria-hidden="true"></i><span>首页</span></a></li>
                <li><a href="{{ url('questions') }}"><i class="fa fa-video-camera" aria-hidden="true"></i><span>社区</span></a></li>
                <li><a href="/novel"><i class="fa fa-book" aria-hidden="true"></i><span>博文</span></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                <li><a href="{{ route('login') }}"><span>登录</span></a></li>
                <li style="margin-left:0"><a href="{{ route('register') }}"><span>注册</span></a></li>
                @else
                    <li><i class="fa fa-bell" aria-hidden="true"></i></li>
                    <li><img width="36" style="border-radius:50% " src="{{ asset('images/avatars/a35.jpg') }}" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>个人信息</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>收藏列表</a></li>
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
<div style="margin-top: 58px">
    @yield('content')
</div>
<div class="footer" style="height: 600px;margin-top:50px">
    <div class="container-fluid">
        <div class="col-md-3">
            <h3 style="text-align: center">这里放点什么？</h3>
            <p style="padding: 0 25px;margin-top: 50px;color: #8e8e8e">总感觉这里应该放点啥，不然总感觉空荡荡的。有没有人给我出点主意啊！</p>
        </div>
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="col-sm-4">
                    <h3 style="text-align: center">学习资料</h3>
                    <div class="a-ul">
                        <p style="text-align: center;"><a href="http://d.laravel-china.org/" class="a-link">laravel官网</a></p>
                        <p style="text-align: center;"><a href="https://laravelchen.com/" class="a-link">LaravelChen个人网站</a></p>
                        <p style="text-align: center;"><a href="https://www.laravist.com/" class="a-link">Laravist个人网站</a></p>
                        <p style="text-align: center;"><a href="https://www.laracasts.com/" class="a-link">Laracasts个人网站</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h3 style="text-align: center">实用推荐</h3>
                    <div class="a-ul">
                        <p style="text-align: center;"><a href="http://fontawesome.io/" class="a-link">Font Awesome</a></p>
                        <p style="text-align: center;"><a href="http://element.eleme.io/#/zh-CN" class="a-link">Element UI</a></p>
                        <p style="text-align: center;"><a href="http://hao.shejidaren.com/" class="a-link">设计导航</a></p>
                        <p style="text-align: center;"><a href="http://www.ibootstrap.cn/" class="a-link">BootStrap可视化</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h3 style="text-align: center">关于建站</h3>
                    <div class="a-ul">
                            <p style="text-align: center;"><a href="https://www.aliyun.com/?spm=5176.8157463.765261.1.RDCZEp" class="a-link">阿里云</a></p>
                            <p style="text-align: center;"><a href="https://sendcloud.sohu.com/" class="a-link">SendCloud</a></p>
                            <p style="text-align: center;"><a href="https://www.qiniu.com/" class="a-link">七牛云存储</a></p>
                            <p style="text-align: center;"><a href="https://cn.wordpress.org/" class="a-link">WordPress</a></p>
                            <p style="text-align: center;"><a href="http://www.geetest.com/" class="a-link">GEETEST</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h3 style="text-align: center">QQ群</h3>
            <div style="text-align: center;margin-top: 40px">
                <img src="https://photo.laravelchen.cn/qqqqqun.png" width="140" height="150">
            </div>
        </div>
    </div>
</div>

</body>
</html>