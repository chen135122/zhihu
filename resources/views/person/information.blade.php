<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    {{--<link rel="stylesheet" href="/public/css/amazeui.min.css">--}}
    <link rel="stylesheet" href="/public/css/amazeui.cropper.css">
    <link rel="stylesheet" href="/public/css/custom_up_img.css">
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

    <link rel="shortcut icon" href="{{ asset('img/pexels-photo-463684.ico') }}"/>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
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
                <li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i><span>首页</span></a></li>
                <li><a href="{{ url('questions') }}"><i class="fa fa-video-camera" aria-hidden="true"></i><span>社区</span></a></li>
                <li><a href="{{ route('articleAll') }}"><i class="fa fa-book" aria-hidden="true"></i><span>博文</span></a></li>
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
                    <li id="img-change"><img width="36" style="border-radius:50% " src="{{ $data->avatar }}" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>个人信息</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>收藏列表</a></li>
                            @role('admin')
                            <li><a href="{{ route('back') }}"><i class="fa fa-heart" aria-hidden="true"></i>后台首页</a></li>
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
<div style="margin-top: 100px">
    <div class="col-md-12">
        <div class="col-md-7 col-md-offset-1">
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 个人信息
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="{{ url('person/store') }}" method="post">
                                {!! csrf_field() !!}
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input name="name" type="text" id="user-name" value="{{ $data->name }}" required>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
                                    <div class="am-u-sm-9">
                                        <input name="email" type="email" id="user-email" value="{{ $data->email }}" readonly="readonly">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">电话 / Telephone</label>
                                    <div class="am-u-sm-9">
                                        <input name="phone" type="tel" id="user-phone" placeholder="输入你的电话号码 / Telephone">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">QQ</label>
                                    <div class="am-u-sm-9">
                                        <input name="QQ" type="text" pattern="[0-9]*" id="user-QQ" placeholder="输入你的QQ号码">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">微博 / Twitter</label>
                                    <div class="am-u-sm-9">
                                        <input name="weibo" type="text" id="user-weibo" placeholder="输入你的微博 / Twitter">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
                                    <div class="am-u-sm-9">
                                        <textarea name="introduce" class="" rows="5" id="user-intro" placeholder="输入个人简介(250个字以内)"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit"  class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4" id="img-change">
            <img alt="140x140" width="200px" height="200px" src="{{ $data->avatar }}" class="img-thumbnail" />
            <div class="form-group">
                <button style="margin-top: 20px;margin-left: 35px" id="up-img-touch" type="button" class="btn btn-default btn-success">上传新头像</button>
            </div>
        </div>
    </div>
</div>
<div class="am-modal am-modal-no-btn up-modal-frame" tabindex="-1" id="up-modal-frame">
    <div class="am-modal-dialog up-frame-parent up-frame-radius">
        <div class="am-modal-hd up-frame-header">
            <label>修改头像</label>
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd  up-frame-body">
            <div class="am-g am-fl">

                <div class="am-form-group am-form-file">
                    <div class="am-fl">
                        <button type="button" class="am-btn am-btn-default am-btn-sm">
                            <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                    </div>
                    <input type="file" class="up-img-file">
                </div>
            </div>
            <div class="am-g am-fl">
                <div class="up-pre-before up-frame-radius">
                    <img alt="" src="" class="up-img-show" id="up-img-show" >
                </div>
                <div class="up-pre-after up-frame-radius">
                </div>
            </div>
            <div class="am-g am-fl">
                <div class="up-control-btns">
                    <span class="am-icon-rotate-left"   id="up-btn-left"></span>
                    <span class="am-icon-rotate-right"  id="up-btn-right"></span>
                    <span class="am-icon-check up-btn-ok" url="{{ url('person/save') }}"
                          parameter="{width:'200',height:'200'}">
    				</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!--加载框-->
<div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="up-modal-loading">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">正在上传...</div>
        <div class="am-modal-bd">
            <span class="am-icon-spinner am-icon-spin"></span>
        </div>
    </div>
</div>

<!--警告框-->
<div class="am-modal am-modal-alert" tabindex="-1" id="up-modal-alert">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">信息</div>
        <div class="am-modal-bd"  id="alert_content">
            成功了
        </div>
        <div class="am-modal-footer">
            <span class="am-modal-btn">确定</span>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js" charset="utf-8"></script>
<script src="{{ asset('js/cropper.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/custom_up_img.js') }}" charset="utf-8"></script>

<div class="footer" style="height: 600px;margin-top:50px">
    <div class="container-fluid">
        <div class="col-md-12">
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
    <p style="text-align:center">备案号:<a style="color: #000;text-decoration: none" href="http://www.miitbeian.gov.cn">苏ICP备17037702号</a></p>
</div>

</body>

</html>