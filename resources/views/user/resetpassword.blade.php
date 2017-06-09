@extends('basic.template1')
@section('template1')
<div class="container-fluid">
    <div class="row">
        <form action="" class="col-md-6 col-md-offset-3" method="POST" role="form">
            @include('basic.message')
            {{ csrf_field() }}
            <legend>
                修改密码
            </legend>
            <div class="form-group">
                <label for="">
                    原密码
                </label>
                <input class="form-control" id="oldpassword" name="oldpassword" placeholder="原始密码" type="password" value="{{ old('oldpassword') }}"/>
            </div>
            <div class="form-group">
                <label for="">
                    新密码
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
                修改
            </button>
            <a href="{{ url('user/login') }}">
                <button class="btn bgc-white" type="button">
                    返回登录
                </button>
            </a>
            <a href="{{ url('forget') }}">
                <button class="btn bgc-white pull-right" type="button">
                    找回密码
                </button>
            </a>
        </form>
    </div>
</div>
@endsection
