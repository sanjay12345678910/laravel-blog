<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       @include('inc.navbar');
       <div class="container">
        @include('inc.messages');
        @yield('content')
        </div>
    </div>
    <footer>
            <div class="col-lg-12" style="background-color:rgb(20,20,20);">
                <div class="col-lg-4" style="padding:20px;">
            <p style="color:white; font-size:1.5em;">Contact Links</p>
                <ul>
                    <li><a  style="color:white;" href="/home">Home</a></li>
                    <li><a  style="color:white;" href="/services">service</a></li>
                    <li><a style="color:white;" href="/about">About</a></li>
                </ul>
                </div>
                <p>@ All rights reserve to kharipati.com</p>
            </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
