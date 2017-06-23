@extends('index')
@section('content')

    <div class="row" style="background-color:#f5f5f1">
        <div class="col-md-4 col-md-offset-4" style="margin-bottom:60px ">
            <div class="container-fluid" >
                <form class="form-horizontal" role="form" action="/login/login" method="post" style="margin-top:100px;">
                    <div class="form-group">
                        <label class="control-label">电子邮箱</label>
                        <input id="email" type="email" class="form-control"  placeholder="E-mail" name="email" required="required" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">密码</label>
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">点击登录</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop