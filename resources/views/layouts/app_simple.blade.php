<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('menu.Title') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="text-center mt-3">
            <a href="/">
                <img src="{{ asset('img/ajlogo_sm.png') }}" alt="icon" width="32">
                <p><i>{{ __('menu.Title') }}</i></p>
            </a>
        </nav>
        <div class="mt-4 py-4">
            @yield('content')
        </div>
    </body>
</html>
