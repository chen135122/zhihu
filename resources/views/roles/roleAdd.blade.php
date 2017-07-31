@extends('back.index')
@section('content')
    <div class="tpl-page-container tpl-page-header-fixed">
        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="{{ route('back') }}" class="nav-link ">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list active">
                            <i class="am-icon-table"></i>
                            <span>列表信息</span>
                            <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display:block">
                            <li>
                                <!-- 打开状态 a 标签添加 active 即可   -->
                                <a href="{{ route('articleList') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>博文列表</span>
                                </a>

                                <a href="{{ route('personList') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>用户列表</span>
                                </a>
                                <a href="{{ route('questionList') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>问题列表</span>
                                </a>
                                <a href="{{ route('rolesAll') }}" class="active">
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
        <div class="tpl-content-wrapper">
            <div class="tpl-portlet-components" style="margin-top: -10px">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 新增角色
                    </div>
                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="{{ url('roles/add') }}" method="post">
                                {!! csrf_field() !!}
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">名称/Name</label>
                                    <div class="am-u-sm-9">
                                        <input name="name" type="text" id="user-name" value="">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">Slug</label>
                                    <div class="am-u-sm-9">
                                        <input name="slug" type="text" id="user-email" value="">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">描述 / Description</label>
                                    <div class="am-u-sm-9">
                                        <input name="description" type="tel" id="user-phone" placeholder="">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">权限等级 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input name="level" type="tel" id="user-phone" placeholder="">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit"  class="am-btn am-btn-primary">添加角色</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop







