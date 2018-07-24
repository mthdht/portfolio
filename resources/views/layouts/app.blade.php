<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
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
                    <img src="{{ asset('img/md-white.png') }}" alt="logo MD" width="43" class="w3-image" >
                </a>

                <a href="" class="w3-bar-item w3-large coda w3-padding-16 ct-hover-blue">
                    <img src="{{ asset('img/md-white.png') }}" alt="logo MD" width="50" class="w3-image w3-hide-small" >
                    <b>Matthieu Dehondt</b>
                </a>

                <div class="w3-right w3-padding-16 w3-hide-small">
                    <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Projets</b></a>
                    <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Games</b></a>
                    <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Cours</b></a>
                    <a href="" class="w3-bar-item w3-large ct-hover-blue"><b>Contact</b></a>
                </div>
            </div>

            <div class="w3-sidebar w3-bar-block w3-border-right w3-text-white ct-dark-blue" style="display:none;z-index: 10" id="mySidebar">
                <button onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-text-white">Close &times;</button>
                <a href="#" class="w3-bar-item w3-button w3-text-teal">Acceuil</a>
                <a href="#" class="w3-bar-item w3-button">Chapitres</a>
                <a href="#" class="w3-bar-item w3-button">A propos</a>
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
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script>
        window.sr = ScrollReveal({ duration: 1000, delay: 300 });
        sr.reveal('.me', { origin: 'left' });
        sr.reveal('.about', { origin: 'right', duration: 1500, delay: 500, viewFactor: 0 });
        sr.reveal('.skillbar', { origin: 'bottom' }, 100);
        sr.reveal('.tool', { origin: 'right' }, 100 );
        sr.reveal('.information', { origin: 'right' }, 150 );
    </script>


</body>
</html>
