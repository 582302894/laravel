
@extends('basic.template1')

@section('template1')
<div class="container-fluid">
    <div class="row">
        <form action="" class="col-md-6 col-md-offset-3" method="POST" role="form">
            @include('basic.message')
            {{ csrf_field() }}
            <legend>
                登录
            </legend>
            <div class="form-group">
                <label class="control-label" for="account">
                    帐号
                </label>
                <input class="form-control" id="account" name="account" placeholder="帐号名称" type="text" value="{{ old('account') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">
                    密码
                </label>
                <input class="form-control" id="password" name="password" placeholder="密码" type="password" value="{{ old('password') }}"/>
            </div>
            <button class="btn btn-primary" type="submit">
                登录
            </button>
            <a href="{{ url('user/register') }}">
                <button class="btn bgc-white" type="button">
                    注册
                </button>
                <a href="{{ url('forget') }}">
                <button class="btn bgc-white pull-right" type="button">
                    找回密码
                </button>
            </a>
            </a>
        </form>
    </div>
</div>
@endsection
