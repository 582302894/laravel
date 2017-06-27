
@extends('basic.basic')

@extends('basic.header')


@section('header')

    @if(Auth::check())
<li class="dropdown">
    <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
        {{ $user=\App\User::find(Auth::user()->uid)->name}}
        <span class="caret">
        </span>
    </a>
    <ul class="dropdown-menu">
        @if(Auth::user()->uid==1)
            <li>
                <a href="{{url('admin')}}">
                    后台
                </a>
            </li>
        @endif
        <li>
            <a href="{{url('user/edit/self')}}">
                个人信息
            </a>
        </li>
        <li>
            <a href="{{url('resetpassword')}}">
                密码修改
            </a>
        </li>
        <li>
            <a href="{{ url('/logout') }}">
                登出
            </a>
        </li>
    </ul>
</li>
@else
<li>
    <a href="{{ url('user/login') }}">
        登录
    </a>
</li>
@endif
@stop



@section('content')
    <div class="row min-height768">
        <div class="col-md-2" style="">
            <a href="{{ url('admin/picturelogs') }}">图片同步日志</a><br>
        </div>
        <div class="col-md-10">
            @yield('template2')
        </div> 
    </div>
    @include('basic.footer')
@endsection
