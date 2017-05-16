@extends('basic.template1')
@section('template1')
<div class="container-fluid">
    <div class="row">
        <form action="" class="col-md-6 col-md-offset-3" method="POST" role="form">
            @include('basic.message')
            {{ csrf_field() }}
            <legend>
                用户注册
            </legend>
            <div class="form-group">
                <label for="">
                    帐号
                </label>
                <input class="form-control" id="account" name="account" placeholder="帐号名称" type="text" value="{{ old('account') }}"/>
            </div>
            <div class="form-group">
                <label for="">
                    密码
                </label>
                <input class="form-control" id="password" name="password" placeholder="密码" type="password" value="{{ old('password') }}"/>
            </div>
            <div class="form-group">
                <label for="">
                    确认密码
                </label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="确认密码" type="password" value="{{ old('password_confirmation') }}"/>
            </div>
            <button class="btn btn-primary" type="submit">
                注册
            </button>
            <a href="{{ url('user/login') }}">
                <button class="btn bgc-white" type="button">
                    返回登录
                </button>
            </a>
        </form>
    </div>
</div>
@endsection
