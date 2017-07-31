@extends('back.index')
@section('content')
    <div class="tpl-page-container tpl-page-header-fixed">

        <div class="tpl-left-nav tpl-left-nav-hover">

            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="{{ route('back') }}" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>列表信息</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="{{ route('articleList') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>博文列表</span>
                                </a>
                                <a href="{{ route('personList') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>用户列表</span>
                                </a>
                                <a href="form-news.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>消息列表</span>
                                </a>
                                <a href="{{ route('rolesAll') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>角色列表</span>
                                </a>
                                <a href="{{ route('articleType') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>博文类别列表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tpl-content-wrapper" style="margin-top: -10px">
            <div class="row">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="am-icon-comments-o"></i>
                        </div>
                        <div class="details">
                            <div class="number"> {{ $data['articles'] }} </div>
                            <div class="desc"> 篇博文 </div>
                        </div>
                        <a class="more" href="{{ route('articleList') }}"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="am-icon-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number"> {{ $data['users'] }} </div>
                            <div class="desc"> 个用户 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="am-icon-apple"></i>
                        </div>
                        <div class="details">
                            <div class="number"> {{ $data['questions'] }} </div>
                            <div class="desc"> 篇帖子 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="am-icon-android"></i>
                        </div>
                        <div class="details">
                            <div class="number"> {{ $data['topics'] }} </div>
                            <div class="desc"> 个标签 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="am-icon-android"></i>
                        </div>
                        <div class="details">
                            <div class="number"> {{ $data['roles'] }} </div>
                            <div class="desc"> 个角色 </div>
                        </div>
                        <a class="more" href="{{ route('rolesAll') }}"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop