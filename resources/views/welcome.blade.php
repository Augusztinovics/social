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
        <div class="text-center">
            <div class="mt-3">
                <div>
                    <img src="{{ asset('img/ajlogo_sm.png') }}" alt="icon" width="32">
                </div>
                <p><i>{{ __('menu.Title') }}</i></p>
                <div class="mb-3">
                    <form action="{{ route('language.switch') }}" method="POST" class="lg-select">
                        @csrf
                        <select name="language" id="language" onchange="this.form.submit()">
                            <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : ''}}>English</option>
                            <option value="hu" {{ app()->getLocale() === 'hu' ? 'selected' : ''}}>Magyar</option>
                            <option value="sr" {{ app()->getLocale() === 'sr' ? 'selected' : ''}}>Serbian</option>
                        </select>
                    </form>
                </div>
                <div class="">
                    @auth
                    <p>
                        <a href="{{ url('/home') }}" class="welcome-menu-link">{{ __('menu.Home') }}</a>
                    </p>
                    @else
                        <p>
                            <a href="{{ route('login') }}" class="welcome-menu-link">{{ __('menu.Login') }}</a>
                        </p>
                        <p>
                            <a href="{{ route('register') }}" class="welcome-menu-link">{{ __('menu.Register') }}</a>
                        </p>
                    @endauth
                </div>
            </div>

            <div>
                <h1>{{ __('menu.aj_title') }}</h1>
            </div>

            <div class="welcome-lg-icon">
                <img src="{{ asset('img/ajlogo_lg.png') }}" alt="large icon" width="100%">
            </div>
            <div class="mt-4">
                <p>{{ __('menu.aj_p') }}</p>
                <p>
                    <a href="{{ route('terms') }}">{{ __('menu.aj_terms') }}</a>
                    <a href="{{ route('privacy') }}" class="ml-3">{{ __('menu.aj_privacy') }}</a>
                </p>
            </div>

        </div>
    </body>
</html>
