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

        <div class="tpl-content-wrapper" >
            <div class="container-fluid" >
                <div class="row clearfix">
                    <div class="col-md-12 column" style="margin-top: -3px;margin-bottom: 30px">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <form role="form" action="/article/create" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">标题<span style="color: red">*</span></label><input name="title" type="text" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">作者<span style="color: red">*</span></label><input name="author" type="text" class="form-control" id="exampleInputPassword1" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">封面url<span style="color: red">*</span></label><input name="cover_img" type="text" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">简介<span style="color: red">*</span></label><input name="introduce" type="text" class="form-control" id="exampleInputPassword1" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">博文类别<span style="color: red">*</span></label>
                                        <select class="form-control" name="type" required>
                                            <option></option>
                                            @foreach($data as $type)
                                            <option>{{ $type->name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <label for="exampleInputPassword1">正文内容<span style="color: red">*</span></label>
                                    <div id="editormd_id">
                                        <textarea name="content" style="display:none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-block btn-success">发表</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! editor_js() !!}
        </div>
    </div>
@stop