<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title> @yield('title',"unknown")</title>
    

</head>
<body>
    @include('layout.nav')
    <div class="container">
        @yield('content')
    </div>
    
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>