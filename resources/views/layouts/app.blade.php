<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="w3-bar w3-red w3-padding">
                <div class="w3-content">
                    <a href="" class="">
                        <img src="/img/logomthwhite.png" alt="logo matthieu dehondt" width="180">
                    </a>
                    <div class="w3-right">
                        <a href="" class="w3-bar-item w3-button w3-large">{{ __('Projets') }}</a>
                        <a href="" class="w3-bar-item w3-button w3-large">{{ __('Games') }}</a>
                        <a href="" class="w3-bar-item w3-button w3-large">{{ __('Cours') }}</a>
                        <a href="" class="w3-bar-item w3-button w3-large">{{ __('Contact') }}</a>
                    </div>
                </div>
            </nav>
        </header>
    </div>
</body>
</html>
