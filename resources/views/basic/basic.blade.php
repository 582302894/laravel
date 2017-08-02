<!DOCTYPE html>
<html>
    <head>
        <title>
            laravel-sunhaobo
        </title>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <link href="{{ asset('css/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/public.css') }}" rel="stylesheet" type="text/css"/>
        <!-- <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"> -->

        <script src="{{ asset('js/jquery-2.2.4.js') }}" type="text/javascript">
        jquery-2.2.4
        </script>
    </head>
    <body>
        @yield('content')
    </body>
    <script src="{{ asset('css/bootstrap/dist/js/bootstrap.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/public.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript">
    $(function(){
        console.log('begin ---------- start');
        // $.get('./jsiplogs');
        //
        var REMOTE_ADDR="{{$_SERVER['REMOTE_ADDR']  or ''}}";
        var REQUEST_URI="{{$_SERVER['REQUEST_URI'] or ''}}";
        var HTTP_REFERER="{{$_SERVER['HTTP_REFERER'] or ''}}";
        $.post("http://{{$_SERVER['HTTP_HOST']}}/iplogs",{
            '_token':'{{csrf_token()}}',
            'REMOTE_ADDR':REMOTE_ADDR,
            'REQUEST_URI':REQUEST_URI,
            'HTTP_REFERER':HTTP_REFERER
        });
    })
    </script>
</html>
