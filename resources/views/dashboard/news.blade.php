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
    <link href="{{ asset('css/dashboard/jquery.fileupload-ui.css') }}" media="all" rel="stylesheet" type="text/css">
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
                            <a href="">
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
                                    <span>新闻管理</span>
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
                        <div class="col-sm-12">
                            <div class="box bordered-box orange-border" style="margin-bottom:0;">
                                <div class="box-header purple-background">
                                    <div class="title">新闻管理列表</div>
                                    <div class="actions">
                                        <a class="btn box-remove btn-xs btn-link" href="http://www.bublinastudio.com/flattybs3/tables.html#"><i class="icon-remove"></i>
                                        </a>

                                        <a class="btn box-collapse btn-xs btn-link" href="http://www.bublinastudio.com/flattybs3/tables.html#"><i></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-content box-no-padding">
                                    <div class="responsive-table">
                                        <div class="scrollable-area">
                                            <div class="row">
                                                <div class="col-md-10">
                                                        <a class="btn btn-success" data-toggle="modal" role="button" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#modal-example2">
                                                            新增新闻
                                                        </a>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="modal-example2" tabindex="-1" aria-hidden="true"
                                                       style="display: none;">
                                                <div class="modal-dialog" style="width: 1000px;height: 500px">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button aria-hidden="true" class="close" data-dismiss="modal"
                                                                    type="button">×
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">新增节点</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-sm-12 box" style="margin-bottom: 0">
                                                                <div class="box-content">
                                                                    <div class="tabbable">
                                                                        <ul class="nav nav-tabs nav-tabs-simple">
                                                                            <li class="active">
                                                                                <a class="green-border" data-toggle="tab" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#tabsimple1">
                                                                                    <i class="icon-indent-left"></i>
                                                                                    基本信息
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#tabsimple2">
                                                                                    <i class="icon-edit"></i>
                                                                                    内容
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#tabsimple3">
                                                                                    <i class="icon-upload"></i>
                                                                                    上传附件
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="{{ asset('/dashboard/addnews') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                                                            {!! csrf_field() !!}
                                                                            <div class="tab-content">
                                                                                <div class="tab-pane active" id="tabsimple1">
                                                                                    <input name="authenticity_token" type="hidden">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputText1">标题<span style="color: red">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" id="inputText1" placeholder="标题" name="topic" type="text" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputPassword4">副标题<span style="color: red">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" id="inputPassword4" name="sub_topic" placeholder="副标题" type="text" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputPassword4">作者<span style="color: red">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" id="inputPassword4" name="author" placeholder="作者" type="text" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputSelect">Select</label>
                                                                                        <div class="col-md-8">
                                                                                            <select class="form-control" id="inputSelect" required name="type_id">
                                                                                                <option></option>
                                                                                                @foreach($type as $list)
                                                                                                    @if($list->parent_id != 0)
                                                                                                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputTextArea1">Textarea</label>
                                                                                        <div class="col-md-8">
                                                                                            <textarea class="form-control" id="inputTextArea1" placeholder="100字以内......" rows="3"></textarea>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="tab-pane" id="tabsimple2">
                                                                                    <div class="form-group">
                                                                                    @include('vendor.ueditor.assets')
                                                                                    <!-- 编辑器容器 -->
                                                                                        <script id="container" name="content" type="text/plain"></script>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane" id="tabsimple3">
                                                                                    <div class="form-group">
                                                                                        <form action="http://jquery-file-upload.appspot.com/" enctype="multipart/form-data" id="fileupload" method="POST">
                                                                                            <div class="row fileupload-buttonbar">
                                                                                                <div class="col-sm-7 col-sm-offset-1">
                                                                                                    <input data-bfi-disabled="" multiple="multiple" name="files[]" type="file">
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions form-actions-padding-sm">
                                                                                    <div class="row">
                                                                                        <div class="col-md-10 col-md-offset-2">
                                                                                            <button class="btn btn-primary" type="submit">
                                                                                                <i class="icon-save"></i>
                                                                                                增加新闻
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                        <!-- 实例化编辑器 -->
                                                                        <script type="text/javascript">
                                                                            var ue = UE.getEditor('container');
                                                                            ue.ready(function() {
                                                                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                                                            });
                                                                        </script>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="modal-example" tabindex="-1" aria-hidden="true"
                                                 style="display: none;">
                                                <div class="modal-dialog" style="width: 1000px;height: 500px">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button aria-hidden="true" class="close" data-dismiss="modal"
                                                                    type="button">×
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">新增节点</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-sm-12 box" style="margin-bottom: 0">
                                                                <div class="box-content">
                                                                    <div class="tabbable">
                                                                        <ul class="nav nav-tabs nav-tabs-simple">
                                                                            <li class="active">
                                                                                <a class="green-border" data-toggle="tab" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#tabsimple4">
                                                                                    <i class="icon-indent-left"></i>
                                                                                    基本信息
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#tabsimple5">
                                                                                    <i class="icon-edit"></i>
                                                                                    内容
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#tabsimple6">
                                                                                    <i class="icon-upload"></i>
                                                                                    上传附件
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="{{ asset('/dashboard/modifynews') }}" enctype="multipart/form-data" accept-charset="UTF-8">
                                                                            {!! csrf_field() !!}
                                                                            <div class="tab-content">
                                                                                <div class="tab-pane active" id="tabsimple4">
                                                                                    <input name="authenticity_token" type="hidden">
                                                                                    <input name="news_id" id="news_id" type="hidden">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputText1">标题<span style="color: red">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" id="topic" placeholder="标题" name="topic" type="text" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputPassword4">副标题<span style="color: red">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" id="sub_topic" name="sub_topic" placeholder="副标题" type="text" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputPassword4">作者<span style="color: red">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" id="inputPassword4" name="author" placeholder="作者" type="text" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputSelect">Select</label>
                                                                                        <div class="col-md-8">
                                                                                            <select class="form-control" id="inputSelect" required name="type_id">
                                                                                                <option id="type_id"></option>
                                                                                                @foreach($type as $list)
                                                                                                    @if($list->parent_id != 0)
                                                                                                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label" for="inputTextArea1">Textarea</label>
                                                                                        <div class="col-md-8">
                                                                                            <textarea class="form-control" id="intro" placeholder="100字以内......" rows="3"></textarea>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="tab-pane" id="tabsimple5">
                                                                                    <div class="form-group">
                                                                                    <!-- 编辑器容器 -->
                                                                                        <script id="container2" name="content" type="text/plain" value="dajsdlasdahsl"></script>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane" id="tabsimple6">
                                                                                    <div class="form-group">
                                                                                        <form action="http://jquery-file-upload.appspot.com/" enctype="multipart/form-data" id="fileupload" method="POST">
                                                                                            <div class="row fileupload-buttonbar">
                                                                                                <div class="col-sm-7 col-sm-offset-1">
                                                                                                    <input data-bfi-disabled="" multiple="multiple" name="files[]" type="file">
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions form-actions-padding-sm">
                                                                                    <div class="row">
                                                                                        <div class="col-md-10 col-md-offset-2">
                                                                                            <button class="btn btn-primary" type="submit">
                                                                                                <i class="icon-save"></i>
                                                                                                修改新闻
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <!-- 实例化编辑器 -->
                                                                        <script type="text/javascript">
                                                                            var ue = UE.getEditor('container');
                                                                            ue.ready(function() {
                                                                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                                                            });
                                                                        </script>
                                                                        <script type="text/javascript">
                                                                            var ue = UE.getEditor('container2');
                                                                            ue.ready(function() {
                                                                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                                                            });
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                                <table class="data-table-column-filter table table-bordered table-striped dataTable" style="margin-bottom:0;" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name : activate to sort column descending" style="width: 327px;">
                                                            标题
                                                        </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="
                                  E-mail
                                : activate to sort column ascending" style="width: 347px;">
                                                            分类
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="
                                  Status
                                : activate to sort column ascending" style="width: 183px;">
                                                            日期
                                                        </th>

                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 138px;"></th></tr>
                                                    </thead>

                                                    <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">
                                                            <span class="filter_column filter_text">
                                                                <input type="text" class="text_filter search_init" value="Name">
                                                            </span>
                                                        </th>
                                                        <th rowspan="1" colspan="1">
                                                            <span class="filter_column filter_text">
                                                                <input type="text" class="text_filter search_init" value="E-mail">
                                                            </span>
                                                        </th>
                                                        <th colspan="2" rowspan="1">
                                                            <span class="filter_column filter_text">
                                                                <input type="text" class="search_init text_filter" value="Status">
                                                            </span>
                                                        </th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                    @foreach($data as $value)
                                                    <tr class="odd">
                                                        <td class="  sorting_1">{{ $value->topic }}</td>
                                                        <td class=" ">{{ $value->newstype->name }}</td>
                                                        <td class=" ">
                                                            {{ $value->created_at }}
                                                        </td>
                                                        <td class=" ">
                                                            <div class="text-right">
                                                                <a class="btn btn-success btn-xs modify_news" value="{{ $value->id }}" data-toggle="modal" role="button" href="http://www.bublinastudio.com/flattybs3/ui_elements.html#modal-example">
                                                                    点击修改
                                                                </a>
                                                                <a class="btn btn-danger btn-xs" href="{{ url('deletenews/'.$value->id) }}">
                                                                    删除
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

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
<script id="template-upload" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-upload fade">
                  <td class="preview"><span class="fade"></span></td>
                  <td class="name"><span>{%=file.name%}</span></td>
                  <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
                  {% if (file.error) { %}
                  <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
                  {% } else if (o.files.valid && !i) { %}
                  <td>
                    <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
                  </td>
                  <td>{% if (!o.options.autoUpload) { %}
                    <button class="btn btn-primary start">
                      <i class="icon-upload icon-white"></i>
                      <span>Start</span>
                    </button>
                    {% } %}</td>
                  {% } else { %}
                  <td colspan="2"></td>
                  {% } %}
                  <td>{% if (!i) { %}
                    <button class="btn btn-warning cancel">
                      <i class="icon-ban-circle icon-white"></i>
                      <span>Cancel</span>
                    </button>
                    {% } %}</td>
                </tr>
                {% } %}
              </script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-download fade">
                  {% if (file.error) { %}
                  <td></td>
                  <td class="name"><span>{%=file.name%}</span></td>
                  <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
                  <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
                  {% } else { %}
                  <td class="preview">{% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
                    {% } %}</td>
                  <td class="name">
                    <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
                  </td>
                  <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
                  <td colspan="2"></td>
                  {% } %}
                  <td>
                    <button class="btn btn-danger delete" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                  </td>
                </tr>
                {% } %}
              </script>
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
<script>
    $('.modify_news').click(function () {
        $.ajax({
            type: "GET",
            url: "/modifynews/"+$(this).attr('value'),
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    $("#news_id").val(data.news.id);
                    $("#type_id").val(data.news.type_id);
                    $("#type_id").html(data.news.newstype.name);
                    $("#sub_topic").val(data.news.sub_topic);
                    $("#topic").val(data.news.topic);
                    UE.getEditor('container2').setContent(data.news.content);
                } else {
                    alert("获取失败")
                }
            },
            error: function (jqXHR) {
                alert("发生错误：" + jqXHR.status);
            }
        });
    })
</script>
<script src="{{ asset('js/dashboard/tmpl.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/load-image.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/canvas-to-blob.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.iframe-transport.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.fileupload.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.fileupload-fp.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.fileupload-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.fileupload-init.js') }}" type="text/javascript"></script>
<!-- / START - page related files and scripts [optional] -->
<script src="{{ asset('js/dashboard/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.dataTables.columnFilter.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/dataTables.overrides.js') }}" type="text/javascript"></script>
<!-- / END - page related files and scripts [optional] -->


</body>
</html>