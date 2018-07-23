@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron ct-camel-light">
        <div class="w3-content w3-padding-16 w3-padding w3-center">
            <div class="w3-col m5 l4">
                <img src="/img/moi.jpg" alt="photo de matthieu dehondt" class="w3-circle w3-image">
                <h1>Matthieu Dehondt</h1>
                <p>Développeur | Formateur</p>
            </div>

            <div class="w3-col m7 l8 w3-hide-small">
                <h2>Bienvenue sur mon site !</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="services w3-row">
        <div class="w3-col m4 l4 ct-dark-blue w3-hover-opacity">
            <a href="projets">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-archive fa-4x"></i>
                    <h3>Mes projets</h3>
                    <p>Découvrir mes différents projets personnel, mes réalisations et autres travaux en cour!</p>
                </div>
            </a>
        </div>

        <div class="w3-col m4 l4 ct-blue w3-hover-opacity">
            <a href="">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-gamepad fa-4x"></i>
                    <h3>Mes jeu</h3>
                    <p>Jouer à des reproduction de jeu tel que le Mastermind, Jeu des Paires, Tic Tac Toe, Shi-Fu-Mi ...!</p>
                </div>
            </a>
        </div>

        <div class="w3-col m4 l4 ct-red w3-hover-opacity">
            <a href="">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-book fa-4x"></i>
                    <h3>Mes cours</h3>
                    <p>Apprendre le développement web avec différents cours sur HTML, CSS, Javascript et PHP !</p>
                </div>
            </a>
        </div>
    </div>

    <section class="skills w3-row w3-padding w3-padding-48 w3-center">
        <h2>Mes compétences</h2>
        <div class="w3-row">
            <div class="w3-col l6">
                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-red" style="width: 90%">
                        <div class="skill-title w3-left">
                            <b>HTML</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            90%
                        </div>
                    </div>
                </div>

                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-indigo" style="width: 75%">
                        <div class="skill-title w3-left">
                            <b>CSS</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            75%
                        </div>
                    </div>
                </div>

                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-amber w3-text-white" style="width: 70%">
                        <div class="skill-title w3-left">
                            <b>JAVASCRIPT</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            70%
                        </div>
                    </div>
                </div>

                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-blue" style="width: 55%">
                        <div class="skill-title w3-left">
                            <b>REACT</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            55%
                        </div>
                    </div>
                </div>

                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-green" style="width: 60%">
                        <div class="skill-title w3-left">
                            <b>VUE</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            60%
                        </div>
                    </div>
                </div>

                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-blue-gray" style="width: 80%">
                        <div class="skill-title w3-left">
                            <b>PHP</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            80%
                        </div>
                    </div>
                </div>

                <div class="skillbar w3-dark-gray w3-margin-top">
                    <div class="html w3-padding-large w3-deep-orange" style="width: 75%">
                        <div class="skill-title w3-left">
                            <b>LARAVEL</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            75%
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>

    <section class="w3-padding w3-padding-48 w3-center">
        <h2>Portfolio</h2>
        <p>Mes projets récents</p>
    </section>
@endsection

