<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

         <!-- bootstrap css -->
        <link type="text/css" rel="stylesheet" href="{{asset('src/css/bootstrap.min.css')}}">
        <!-- fon awesome css -->
        <link type="text/css" rel="stylesheet" href="{{asset('src/css/font-awesome.min.css')}}">

        <!-- style sheet -->
        <link type="text/css" rel="stylesheet" href="{{asset('src/css/style.css')}}">

        <link type="text/css" rel="stylesheet" href="{{asset('src/css/test.css')}}">

    </head>
    <body>
        @include('partials.header')
        @include('partials.message')
        @yield('content')
       <script src="{{asset('src/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('src/js/bootstrap.min.js')}}"></script>
        
    </body>
</html>