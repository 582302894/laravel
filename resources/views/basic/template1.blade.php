
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
    <div class="min-height768">
    @yield('template1')
    </div>
    @include('basic.footer')
@endsection
