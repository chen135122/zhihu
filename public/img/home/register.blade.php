@extends('index')
@section('content')
    <div class="row" style="background-color:#f5f5f1">
        <div class="col-md-4 col-md-offset-4" style="margin-bottom:60px ">
            <div class="container-fluid">
                <form class="form-horizontal" action="/user/register" method="post" role="form" style="margin-top:100px;">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label">用户名</label>
                        <input id="name" type="text" class="form-control"  placeholder="username" name="name" required="required" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">电子邮箱</label>
                        <input id="email" type="email" class="form-control"  placeholder="E-mail" name="email" required="required" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">密码</label>
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required="required">
                    </div>
                    <div class="form-group">
                        <label class="control-label">确认密码</label>
                        <input id="repassword" type="password" class="form-control" placeholder="RePassword" name="password_confirmation" required="required">
                    </div>
                    <div class="form-group">
                        <button id = "regist" type="submit" class="btn btn-success btn-block">点击注册</button>
                    </div>
                </form>
                @if($errors->any())
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item list-group-item-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
    @stop
