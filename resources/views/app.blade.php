<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'SaborBooking') }}</title>
        
        <!-- Tailwind -->
        @vite('resources/css/app.css') 

        <!-- Jquery -->
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body class="font-sans antialiased">
        @inertia
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
