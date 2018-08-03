<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Memory game | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body class="w3-text-dark-gray">
<header>
    <nav class="w3-bar ct-dark-blue">
        <div class="w3-content w3-center">
            <a class="w3-bar-item w3-left w3-hide-large w3-hide-medium ct-hover-blue" onclick="w3_open()">
                <img src="{{ asset('img/Memory-white.png') }}" alt="logo MD" width="60" class="w3-image" >
            </a>

            <a href="" class="w3-bar-item w3-large coda ct-hover-blue">
                <img src="{{ asset('img/Memory-white.png') }}" alt="logo MD" width="80" class="w3-image w3-hide-small" >
                <b class="w3-hide-medium w3-hide-large">Matthieu Dehondt <br> Games</b>
            </a>

            <div class="w3-right w3-padding-16 w3-hide-small">
                <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Scores</b></a>
                <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Classement</b></a>
                <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Règles</b></a>
            </div>
        </div>

        <div class="w3-sidebar w3-bar-block w3-border-right w3-text-white ct-dark-blue" style="display:none;z-index: 10" id="mySidebar">
            <button onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-text-white">Close &times;</button>
            <a href="#" class="w3-bar-item w3-button">Scores</a>
            <a href="#" class="w3-bar-item w3-button">Classement</a>
            <a href="#" class="w3-bar-item w3-button">Règles</a>
        </div>
    </nav>
    @yield('jumbotron')
</header>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<main class="w3-main">
    @yield('content')
</main>

<script>
    function w3_open(elem) {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }
    function w3_close() {
        console.log('close');
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>


</body>
</html>
