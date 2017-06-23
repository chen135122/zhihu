@extends('index')
@section('content')
    <div class="row" style="background-color:#f5f5f1">
        <div class="col-md-4 col-md-offset-4" style="margin-bottom:60px ">
            <div class="container-fluid">
                <form class="form-horizontal" action="/addArticle" method="post" role="form" style="margin-top:100px;">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label">用户名</label>
                        <input type="text" class="form-control"  placeholder="title" name="title" required="required" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">内容</label>
                        <textarea class="form-control" rows="5" name="content" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <button id = "regist" type="submit" class="btn btn-success btn-block">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop