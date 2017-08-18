@extends('header')
@section('content')
    <div class="container" >
        <div class="row clearfix">
            <div class="col-md-12 column" style="margin-top: 50px;margin-bottom: 30px">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <form role="form" action="/article/create" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="exampleInputEmail1">标题<span style="color: red">*</span></label><input name="title" type="text" class="form-control" required/>
                            </div>
                            <label for="exampleInputEmail1">内容<span style="color: red">*</span></label>

                            <div id="editormd_id">
                                <textarea name="content" style="display:none;" required></textarea>
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