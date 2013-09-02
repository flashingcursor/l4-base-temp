<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>L4 Site</title>
 
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/unicorn.main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/unicorn.blue.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/unicorn.login.css') }}" rel="stylesheet">

 
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <style>
        @section('styles')
        body {
            padding-top: 60px;
        }
        @show
    </style>   
</head>
<body>
<div class="container">
    @yield('main')
</div>

</body>
</html>