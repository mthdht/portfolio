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

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="w3-bar w3-red">
                <div class="w3-content">
                    <a href="" class="w3-bar-item w3-large coda">
                        <img src="{{ asset('img/md-white.png') }}" alt="logo MD" width="50" class="w3-image">
                       <b>Matthieu Dehondt</b>
                    </a>
                    <div class="w3-right w3-padding">
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
