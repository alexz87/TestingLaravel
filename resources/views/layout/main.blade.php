<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <meta name="author" content="Oleksandr Zadorozhnii">
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header class="bg-dark pt-2 pb-2">
            <div class="container d-flex justify-between align-center">
                <a href="/" class="white font-weight-l">LARAVEL</a>
                <div>
                    <span class="ua-first">Слава Україні</span>
                    <span class="ua-second">Героям Слава</span>
                </div>
            </div>
        </header>
        @yield('content')

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/ajax.js')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>
