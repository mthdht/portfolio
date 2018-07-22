@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron ct-camel-light">
        <div class="w3-content w3-padding-16 w3-center">
            <div class="w3-col m5 l4">
                <img src="/img/moi.jpg" alt="photo de matthieu dehondt" class="w3-circle w3-image">
                <h1>Matthieu Dehondt</h1>
                <p>Développeur | Formateur</p>
            </div>

            <div class="w3-col m7 l8">
                <h2>Bienvenue sur mon site !</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="services w3-row">
        <div class="w3-col m6 l4 ct-dark-blue w3-hover-blue-gray">
            <a href="projets">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-archive fa-4x"></i>
                    <h3>Mes projets</h3>
                    <p>Découvrir mes différents projets personnel et mes travaux en cour!</p>
                </div>
            </a>
        </div>

        <div class="w3-col m6 l4 ct-blue w3-hover-blue">
            <a href="">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-gamepad fa-4x"></i>
                    <h3>Mes jeu</h3>
                    <p>Jouer à des reproduction de jeu tel que le Mastermind, Jeu des Paires, Tic Tac Toe ...!</p>
                </div>
            </a>
        </div>

        <div class="w3-col m6 l4 ct-red ct-hover-pink">
            <a href="">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-book fa-4x"></i>
                    <h3>Mes cours</h3>
                    <p>Apprendre à le développement web avec différents cours sur HTML, CSS, Javascript et PHP !</p>
                </div>
            </a>
        </div>
    </div>
@endsection

