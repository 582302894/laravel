@extends('basic.template1')
@section('template1')
<div class="container-fluid">
    <div class="row">
        <form action="" class="col-md-6 col-md-offset-3 form-horizontal" method="POST" role="form">
            @include('basic.message')
            {{ csrf_field() }}
            <legend>
                找回密码
            </legend>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="mail">
                    邮件
                </label>
                <div class="col-sm-10">
                    <input class="form-control" id="mail" name="mail" placeholder="填写邮件后可用邮件作为帐号登录" type="text" value="{{ old('mail') }}"/>
                </div>
                <div class="col-sm-10 col-sm-offset-2 mt10" data-url="mail/code" for="mail">
                    @include('emails.sendcode')
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="code">
                    验证码
                </label>
                <div class="col-sm-10">
                    <input class="form-control" id="code" name="code" placeholder="验证码" type="number" value="{{ old('code') }}"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="password">
                    新密码
                </label>
                <div class="col-sm-10">
                    <input class="form-control" id="password" name="password" placeholder="新密码" type="password" value="{{ old('password') }}"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="password_confirmation">
                    确认密码
                </label>
                <div class="col-sm-10">
                    <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="确认密码" type="password" value="{{ old('password_confirmation') }}"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary" type="submit">
                        提交
                    </button>
                    <a href="{{ url('user/login') }}">
                        <button class="btn bgc-white" type="button">
                            返回登录
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
