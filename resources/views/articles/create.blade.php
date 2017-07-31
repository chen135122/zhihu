@extends('layouts.header')
@section('content')
    <div class="container-fluid" style="height:60px">
    </div>
    <div class="container-fluid" style="margin-top: 60px">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-8 column col-md-offset-2">
                        <form role="form" action="/article/create" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="exampleInputEmail1">标题*</label><input name="title" type="text" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">作者*</label><input name="author" type="text" class="form-control" id="exampleInputPassword1" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">封面url*</label><input name="cover_img" type="text" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">简介*</label><input name="introduce" type="text" class="form-control" id="exampleInputPassword1" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">标签*</label><input name="lable" type="text" class="form-control" id="exampleInputPassword1" required/>
                            </div>
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
@stop