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
    </head>
    <body>
        @yield('content')
    </body>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('css/bootstrap/dist/js/bootstrap.js') }}" type="text/javascript">
    </script>
</html>