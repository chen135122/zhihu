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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/mine.css">
    <link rel="stylesheet" href="css/testimonails-slider.css">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
                    <input type="text" class="form-control" style="margin-top: 2px" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}"><span>登录</span></a></li>
                    <li style="margin-left:0"><a href="{{ route('register') }}"><span>注册</span></a></li>
                @else
                    <li><i class="fa fa-bell" aria-hidden="true" style="color:#f78e21"></i></li>
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


<div id="slider" style="margin-top: 59px">
    @include('home.banner2')
</div>
@yield('content')

<div id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>建站目标</h2>
                    <img src="images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <h4>记录日常</h4>
                    <p>学习是一个持久的、积累的过程,一个个人的小小网站，不仅仅能展示你学习到的新技术,还能以此和别人交流，互相学习、借鉴。将平常学习遇到的问题记录下来，方便交流，也方便日后查找。</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <h4>互相交流</h4>
                    <p>今时不同往日，毕竟时代在进步，现在开源成了流行趋势，所以不要吝啬啦，有什么好看的、好用的、甚至是好吃的都分享出来吧。多一份分享就多一份快乐，多一个分享就少一半痛苦，不是吗？</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-bell"></i>
                    </div>
                    <h4>不足之处</h4>
                    <p>菜鸟初养成？小白成长记？新手刚上路。。。难免会翻车，所以希望各位老司机能多多指教，有什么意见和建议直接指出来就好了。不久之后相信我也能成为一代秋名山车神。但是目前嘛。。。滴滴，学生卡。>_<。。。</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <h4>定个小目标</h4>
                    <p>人生没有目标那跟咸鱼有什么区别，所以每过一段时间给自己定一个目标才能更好的前进，我的目标？很简单，比如说先赚他个一个亿。>_<。。。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimonails">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>诗和远方</h2>
                    <img src="images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonails-slider">
                    <ul class="slides">
                        <li>
                            <div class="testimonails-content">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                <h6>Jennifer - <a href="#">Chief Designer</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="testimonails-content">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                <h6>Laureen - <a href="#">Marketing Executive</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="testimonails-content">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                <h6>Tanya - <a href="#">Creative Director</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')


<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script src="js/vendor/jquery.gmap3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/toTop.js"></script>
</body>
</html>