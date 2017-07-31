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
                                <a href="{{ route('rolesAll') }}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>角色列表</span>
                                </a>
                                <a href="{{ route('articleType') }}"  class="active">
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
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表信息
                    </div>
                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{{ route('articleTypeAdd') }}">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span
                                                    class="am-icon-plus"></span> 新增
                                        </button>
                                    </a>
                                    <a>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span
                                                    class="am-icon-trash-o"></span> 删除
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select data-am-selected="{btnSize: 'sm'}">
                                    <option value="option1">所有类别</option>
                                    <option value="option2">IT业界</option>
                                    <option value="option3">数码产品</option>
                                    <option value="option3">笔记本电脑</option>
                                    <option value="option3">平板电脑</option>
                                    <option value="option3">只能手机</option>
                                    <option value="option3">超极本</option>
                                </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"
                    type="button"></button>
          </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                    <tr>
                                        <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                        <th class="table-id">ID</th>
                                        <th class="table-title">标题</th>
                                        <th class="table-type">类别</th>
                                        <th class="table-author am-hide-sm-only">作者</th>
                                        <th class="table-date am-hide-sm-only">修改日期</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $list )
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{ $list->id }}</td>
                                            <td><a href="#">{{ $list->name }}</a></td>
                                            <td>{{ $list->intro }}</td>
                                            <td class="am-hide-sm-only">{{ $list->img }}</td>
                                            <td class="am-hide-sm-only">{{ $list->updated_at }}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                                                            <span class="am-icon-pencil-square-o"></span> 编辑
                                                        </button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                            <span class="am-icon-trash-o"></span> 删除
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <hr>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop







