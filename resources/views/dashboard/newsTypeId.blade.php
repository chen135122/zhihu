<!DOCTYPE html>
<!-- saved from url=(0053)http://www.bublinastudio.com/flattybs3/filetrees.html -->
<html class=" js no-touch localstorage svg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>File trees | Flatty - Flat Administration Template</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta content="Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support."
          name="description">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/favicon.ico" rel="shortcut icon"
          type="image/x-icon">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon.png"
          rel="apple-touch-icon-precomposed">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-57x57.png"
          rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-72x72.png"
          rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-114x114.png"
          rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-144x144.png"
          rel="apple-touch-icon-precomposed" sizes="144x144">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- / START - page related stylesheets [optional] -->
    <link href="{{ asset('css/dashboard/ui.dynatree.css') }}" media="screen" rel="stylesheet" type="text/css">
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="{{ asset('css/dashboard/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- / theme file [required] -->
    <link href="{{ asset('css/dashboard/light-theme.css') }}" media="all" id="color-settings-body-color"
          rel="stylesheet" type="text/css">
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="{{ asset('css/dashboard/theme-colors.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- / demo file [not required!] -->
    <link href="{{ asset('css/dashboard/demo.css') }}" media="all" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
    <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body class="contrast-red " style="">
<header>
    <nav class="navbar navbar-default">
        <a class="navbar-brand" href="">
            <img width="81" height="21" class="logo" alt="Flatty"
                 src="{{ asset('img/logo.svg') }}">
            <img width="21" height="21" class="logo-xs" alt="Flatty"
                 src="{{ asset('img/logo_xs.svg') }}">
        </a>
        <a class="toggle-nav btn pull-left" href="http://www.bublinastudio.com/flattybs3/#">
            <i class="icon-reorder"></i>
        </a>
        <ul class="nav">
            <li class="dropdown light only-icon">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.bublinastudio.com/flattybs3/#">
                    <i class="icon-cog"></i>
                </a>
                <ul class="dropdown-menu color-settings">
                    <li class="color-settings-body-color">
                        <div class="color-title">Change body color</div>
                        <a data-change-to="assets/stylesheets/light-theme.css"
                           href="http://www.bublinastudio.com/flattybs3/#">
                            Light
                            <small>(default)</small>
                        </a>
                        <a data-change-to="assets/stylesheets/dark-theme.css"
                           href="http://www.bublinastudio.com/flattybs3/#">
                            Dark
                        </a>
                        <a data-change-to="assets/stylesheets/dark-blue-theme.css"
                           href="http://www.bublinastudio.com/flattybs3/#">
                            Dark blue
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="color-settings-contrast-color">
                        <div class="color-title">Change contrast color</div>
                        <a data-change-to="contrast-red" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-red"></i>
                            Red
                            <small>(default)</small>
                        </a>

                        <a data-change-to="contrast-blue" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-blue"></i>
                            Blue
                        </a>

                        <a data-change-to="contrast-orange" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-orange"></i>
                            Orange
                        </a>

                        <a data-change-to="contrast-purple" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-purple"></i>
                            Purple
                        </a>

                        <a data-change-to="contrast-green" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-green"></i>
                            Green
                        </a>

                        <a data-change-to="contrast-muted" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-muted"></i>
                            Muted
                        </a>

                        <a data-change-to="contrast-fb" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-fb"></i>
                            Facebook
                        </a>

                        <a data-change-to="contrast-dark" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-dark"></i>
                            Dark
                        </a>

                        <a data-change-to="contrast-pink" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-pink"></i>
                            Pink
                        </a>

                        <a data-change-to="contrast-grass-green" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-grass-green"></i>
                            Grass green
                        </a>

                        <a data-change-to="contrast-sea-blue" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-sea-blue"></i>
                            Sea blue
                        </a>

                        <a data-change-to="contrast-banana" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-banana"></i>
                            Banana
                        </a>

                        <a data-change-to="contrast-dark-orange" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-dark-orange"></i>
                            Dark orange
                        </a>

                        <a data-change-to="contrast-brown" href="http://www.bublinastudio.com/flattybs3/#"><i
                                    class="icon-cog text-brown"></i>
                            Brown
                        </a>

                    </li>
                </ul>
            </li>
            <li class="dropdown medium only-icon widget">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.bublinastudio.com/flattybs3/#">
                    <i class="icon-rss"></i>
                    <div class="label">5</div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-user text-success"></i>
                                </div>
                                <div class="pull-left text">
                                    John Doe signed up
                                    <small class="text-muted">just now</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-inbox text-error"></i>
                                </div>
                                <div class="pull-left text">
                                    New Order #002
                                    <small class="text-muted">3 minutes ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-comment text-warning"></i>
                                </div>
                                <div class="pull-left text">
                                    America Leannon commented Flatty with veeery long text.
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-user text-success"></i>
                                </div>
                                <div class="pull-left text">
                                    Jane Doe signed up
                                    <small class="text-muted">last week</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/#">
                            <div class="widget-body">
                                <div class="pull-left icon">
                                    <i class="icon-inbox text-error"></i>
                                </div>
                                <div class="pull-left text">
                                    New Order #001
                                    <small class="text-muted">1 year ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="widget-footer">
                        <a href="http://www.bublinastudio.com/flattybs3/#">All notifications</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown dark user-menu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.bublinastudio.com/flattybs3/#">
                    <img width="23" height="23" alt="Mila Kunis"
                         src="{{ asset('img/avatar.jpg') }}">
                    <span class="user-name">Mila Kunis</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/user_profile.html">
                            <i class="icon-user"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/user_profile.html">
                            <i class="icon-cog"></i>
                            Settings
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://www.bublinastudio.com/flattybs3/sign_in.html">
                            <i class="icon-signout"></i>
                            Sign out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <form action="http://www.bublinastudio.com/flattybs3/search_results.html"
              class="navbar-form navbar-right hidden-xs" method="get">
            <button class="btn btn-link icon-search" name="button" type="submit"></button>
            <div class="form-group">
                <input value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" name="q"
                       type="text">
            </div>
        </form>
    </nav>
</header>
<div id="wrapper">
    <div id="main-nav-bg"></div>
    <nav id="main-nav">
        <div class="navigation">
            <div class="search">
                <form action="http://www.bublinastudio.com/flattybs3/search_results.html" method="get">
                    <div class="search-wrapper">
                        <input value="" class="search-query form-control" placeholder="Search..." autocomplete="off"
                               name="q" type="text">
                        <button class="btn btn-link icon-search" name="button" type="submit"></button>
                    </div>
                </form>
            </div>
            <ul class="nav nav-stacked">
                <li class="active">
                    <a href="">
                        <i class="icon-dashboard"></i>
                        <span>后台首页</span>
                    </a>
                </li>
                <li class="">
                    <a class="dropdown-collapse" href=""><i
                                class="icon-edit"></i>
                        <span>分类管理</span>
                        <i class="icon-angle-down angle-down"></i>
                    </a>

                    <ul class="nav nav-stacked">
                        <li class="">
                            <a href="{{ url('dashboard/newstype') }}">
                                <i class="icon-caret-right"></i>
                                <span>分类列表</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="dropdown-collapse " href="">
                        <i class="icon-tint"></i>
                        <span>新闻管理</span>
                        <i class="icon-angle-down angle-down"></i>
                    </a>
                    <ul class="nav nav-stacked">
                        <li class="">
                            <a href="{{ url('/dashboard/newslist') }}">
                                <i class="icon-caret-right"></i>
                                <span>新闻列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <section id="content">
        <div class="container">
            <div class="row" id="content-wrapper">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <h1 class="pull-left">
                                    <i class="icon-list-ul"></i>
                                    <span>分类管理</span>
                                </h1>
                                <div class="pull-right">
                                    <ul class="breadcrumb">
                                        <li>
                                            <a href="http://www.bublinastudio.com/flattybs3/index.html">
                                                <i class="icon-bar-chart"></i>
                                            </a>
                                        </li>
                                        <li class="separator">
                                            <i class="icon-angle-right"></i>
                                        </li>
                                        <li>Components</li>
                                        <li class="separator">
                                            <i class="icon-angle-right"></i>
                                        </li>
                                        <li class="active">File trees</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="title">分类列表</div>
                                    <div class="actions">
                                        <a class="btn box-remove btn-xs btn-link"
                                           href="http://www.bublinastudio.com/flattybs3/filetrees.html#"><i
                                                    class="icon-remove"></i>
                                        </a>

                                        <a class="btn box-collapse btn-xs btn-link"
                                           href="http://www.bublinastudio.com/flattybs3/filetrees.html#"><i></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div id="tree1">
                                        <ul class="dynatree-container">
                                            <li class="">
                                                <span class="dynatree-node dynatree-has-children dynatree-lastsib dynatree-exp-cl dynatree-ico-c">
                                                            <span class="dynatree-expander"></span>
                                                            <span class="dynatree-icon"></span>
                                                    <a href="{{ url('/dashboard/newstype') }}" class="dynatree-title">
                                                        <span id="click-alert" value="新闻分类">新闻分类</span>
                                                    </a>
                                                </span>
                                                <ul style="">
                                                    @foreach($data as $list)
                                                        @if($list->parent_id == 0)
                                                            <li class="click_alert">
                                                        <span class="dynatree-node dynatree-has-children dynatree-lastsib dynatree-exp-cl dynatree-ico-c">
                                                            <span class="dynatree-expander"></span>
                                                            <span class="dynatree-icon"></span>
                                                            <a href="{{ url('/dashboard/newstype/'.$list->id) }}" class="dynatree-title">
                                                                <span id="click-alert" value="经济新闻">{{ $list->name }}</span>
                                                            </a>
                                                        </span>
                                                                <ul style="">
                                                                    @foreach($data as $value)
                                                                        @if($value->parent_id == $list->id)
                                                                            <li class="click_alert">
                                                                <span class="dynatree-node dynatree-has-children dynatree-lastsib dynatree-exp-cl dynatree-ico-c">
                                                                <span class="dynatree-connector"></span>
                                                                <span class="dynatree-icon"></span>
                                                                    <a href="{{ url('/dashboard/newstype/'.$value->id) }}" class="dynatree-title click_alert">
                                                                        {{ $value->name }}
                                                                    </a>
                                                                </span>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="box">
                                <div class="box-header blue-background">
                                    <div class="title">
                                        <div class="icon-edit"></div>
                                        分类信息
                                    </div>
                                    <div class="actions">
                                        <a class="btn box-remove btn-xs btn-link" href="#"><i class="icon-remove"></i>
                                        </a>

                                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="form form-horizontal" style="margin-bottom: 0;">
                                        <input name="authenticity_token" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputText1">名称(中文)<span style="color:red;">*</span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" id="inputText1" placeholder="" disabled="disabled" value="{{ $info->name }}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputText1">code<span style="color:red;">*</span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" id="inputText1" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputText1">名称(外文)</label>
                                            <div class="col-md-8">
                                                <input class="form-control" id="inputText1" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputText1">排序</label>
                                            <div class="col-md-8">
                                                <input class="form-control" id="inputText1" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputText1">大图标<span style="color:red;">*</span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" id="inputText1" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputText1">小图标<span style="color:red;">*</span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" id="inputText1" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-actions form-actions-padding-sm">
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-2">
                                                    @if($info->parent_id == 0)
                                                    <a class="btn btn-success" data-toggle="modal" role="button" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#modal-example2">
                                                        增加子节点
                                                    </a>
                                                    @endif
                                                    <a class="btn btn-info" data-toggle="modal"
                                                       href="http://www.bublinastudio.com/flattybs3/ui_elements.html#modal-example"
                                                       role="button">修改子节点
                                                    </a>
                                                    <a class="btn btn-default" data-toggle="modal"
                                                       href="{{ url('/dashboard/deletetype/'.$info->id) }}"
                                                       role="button">删除子节点
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="modal-example2" tabindex="-1" aria-hidden="true"
                                                 style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button aria-hidden="true" class="close" data-dismiss="modal"
                                                                    type="button">×
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">新增节点</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form" style="margin-bottom: 0;" method="post"
                                                                  action="{{ url('/dashboard/addfirsttype') }}"
                                                                  accept-charset="UTF-8">
                                                                <input name="authenticity_token" type="hidden">
                                                                <input name="parent_id" type="hidden" value="{{ $info->id }}">
                                                                {!! csrf_field() !!}
                                                                <div class="form-group">
                                                                    <label for="inputText1">子节点名称</label>
                                                                    <input class="form-control" id="inputText1" placeholder="name" type="text" name="name" required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-default" data-dismiss="modal" type="button">
                                                                        关闭
                                                                    </button>
                                                                    <button class="btn btn-primary" type="submit">确认增加</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="modal-example" tabindex="-1" aria-hidden="true"
                                                 style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button aria-hidden="true" class="close" data-dismiss="modal"
                                                                    type="button">×
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">修改节点</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form" style="margin-bottom: 0;" method="post"
                                                                  action="{{ url('/dashboard/modifyfirsttype') }}"
                                                                  accept-charset="UTF-8">
                                                                <input name="authenticity_token" type="hidden">
                                                                <input name="id" type="hidden" value="{{ $info->id }}">
                                                                {!! csrf_field() !!}
                                                                <div class="form-group">
                                                                    <label for="inputText1">子节点名称</label>
                                                                    <input class="form-control" value="{{ $info->name }}" id="inputText1" placeholder="name" type="text" name="name" required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-default" data-dismiss="modal" type="button">
                                                                        关闭
                                                                    </button>
                                                                    <button class="btn btn-primary" type="submit">确认修改</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- / jquery [required] -->
<script src="{{ asset('js/dashboard/jquery.min.js') }}" type="text/javascript"></script>

<!-- / jquery mobile (for touch events) -->
<script src="{{ asset('js/dashboard/jquery.mobile.custom.min.js') }}" type="text/javascript"></script>
<!-- / jquery migrate (for compatibility with new jquery) [required] -->
<script src="{{ asset('js/dashboard/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- / jquery ui -->
<script src="{{ asset('js/dashboard/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- / jQuery UI Touch Punch -->
<script src="{{ asset('js/dashboard/jquery.ui.touch-punch.min.js') }}" type="text/javascript"></script>
<!-- / bootstrap [required] -->
<script src="{{ asset('js/dashboard/bootstrap.js') }}" type="text/javascript"></script>
<!-- / modernizr -->
<script src="{{ asset('js/dashboard/modernizr.min.js') }}" type="text/javascript"></script>
<!-- / retina -->
<script src="{{ asset('js/dashboard/retina.js') }}" type="text/javascript"></script>
<!-- / theme file [required] -->
<script src="{{ asset('js/dashboard/theme.js') }}" type="text/javascript"></script>
<!-- / demo file [not required!] -->
<script src="{{ asset('js/dashboard/demo.js') }}" type="text/javascript"></script>
<!-- / START - page related files and scripts [optional] -->

<script src="{{ asset('js/dashboard/jquery.dynatree.min.js') }}" type="text/javascript"></script>
{{--<script>--}}
{{--(function () {--}}
{{--$("#tree1").dynatree();--}}

{{--$("#tree2").dynatree({--}}
{{--checkbox: true,--}}
{{--selectMode: 2,--}}
{{--onSelect: function (select, node) {--}}
{{--var selKeys, selNodes;--}}
{{--selNodes = node.tree.getSelectedNodes();--}}
{{--selKeys = $.map(selNodes, function (node) {--}}
{{--return "[" + node.data.key + "]: '" + node.data.title + "'";--}}
{{--});--}}
{{--return $("#echoSelection2").text(selKeys.join(", "));--}}
{{--},--}}
{{--onClick: function (node, event) {--}}
{{--if (node.getEventTargetType(event) === "title") {--}}
{{--return node.toggleSelect();--}}
{{--}--}}
{{--},--}}
{{--onKeydown: function (node, event) {--}}
{{--if (event.which === 32) {--}}
{{--node.toggleSelect();--}}
{{--return false;--}}
{{--}--}}
{{--},--}}
{{--idPrefix: "dynatree-Cb2-"--}}
{{--});--}}

{{--$("#tree3").dynatree({--}}
{{--dnd: {--}}
{{--preventVoidMoves: true,--}}
{{--onDragStart: function (node) {--}}
{{--return true;--}}
{{--},--}}
{{--onDragEnter: function (node, sourceNode) {--}}
{{--return ["before", "after"];--}}
{{--},--}}
{{--onDrop: function (node, sourceNode, hitMode, ui, draggable) {--}}
{{--return sourceNode.move(node, hitMode);--}}
{{--}--}}
{{--}--}}
{{--});--}}

{{--}).call(this);--}}
{{--</script>--}}
<!-- / END - page related files and scripts [optional] -->

<script src="{{ asset('js/dashboard/bootstrap-tabdrop.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/bootbox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.jgrowl.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/typeahead.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.timeago.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.nestable.js') }}" type="text/javascript"></script>
{{--<script>--}}
{{--$('#click-alert').click(function () {--}}
{{--alert($(this).attr("value"));--}}
{{--})--}}
{{--</script>--}}
</body>
</html>