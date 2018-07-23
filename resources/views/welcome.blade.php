@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron ct-camel-light">
        <div class="w3-row w3-center">
            <div class="w3-col m6 l6">
                <img src="/img/moi.jpg" alt="photo de matthieu dehondt" class="w3-circle w3-image w3-padding-large" width="300px">
                <div class="w3-animate-left">
                    <h1>Matthieu Dehondt</h1>
                    <p class="w3-large">Développeur | Formateur</p>
                </div>
            </div>

            <div class="w3-col m6 l6 w3-hide-small w3-left-align w3-padding-32 w3-animate-right">
                <h2 class="w3-small"><b>BIENVENUE SUR MON SITE !</b></h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="services w3-row">
        <div class="w3-col m6 l4 ct-dark-blue w3-hover-opacity service">
            <a href="projets">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-archive fa-4x"></i>
                    <h3>Mes projets</h3>
                    <p class="w3-large">Découvrir mes différents projets personnel, réalisations et travaux en cour !</p>
                </div>
            </a>
        </div>

        <div class="w3-col m6 l4 ct-blue w3-hover-opacity service">
            <a href="">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-gamepad fa-4x"></i>
                    <h3>Mes jeu</h3>
                    <p class="w3-large">Jouer à des reproduction de jeu: Mastermind, Jeu des Paires, Morpion, Shi-Fu-Mi ...!</p>
                </div>
            </a>
        </div>

        <div class="w3-col l4 ct-red w3-hover-opacity service">
            <a href="">
                <div class="w3-center w3-padding-large w3-padding-32">
                    <i class="fas fa-book fa-4x"></i>
                    <h3>Mes cours</h3>
                    <p class="w3-large">Apprendre le développement web avec différents cours sur HTML, CSS, Javascript et PHP</p>
                </div>
            </a>
        </div>
    </div>

    <section class="skills w3-row w3-padding w3-padding-48 w3-center">
        <h2 class="w3-xxlarge">Compétences</h2>
        <div class="w3-row">
            <div class="w3-col l6 w3-padding-24">
                <h3>Langages</h3>
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
                    <div class="html w3-padding-large w3-blue" style="width: 75%">
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
                    <div class="html w3-padding-large w3-green" style="width: 65%">
                        <div class="skill-title w3-left">
                            <b>MySQL</b>
                        </div>
                        <div class="skill-pourcent w3-right">
                            65%
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

            <div class="w3-col l6 w3-padding-24 w3-row-padding">
                <h3>Outils</h3>

                <div class="tool w3-col s4 w3-center">
                    <img src="/img/git.png" alt="logo de git" class="w3-image">
                    <p>Git</p>
                </div>

                <div class="tool w3-col s4 w3-center">
                    <img src="/img/github.png" alt="logo github" class="w3-image">
                    <p>Github</p>
                </div>

                <div class="tool w3-col s4 w3-center">
                    <img src="/img/react.png" alt="logo react" class="w3-image">
                    <p>React</p>
                </div>

                <div class="tool w3-col s4 w3-center">
                    <img src="/img/vue.png" alt="logo vuejs" class="w3-image">
                    <p>Vue</p>
                </div>

                <div class="tool w3-col s4 w3-center">
                    <img src="/img/laravel.png" alt="logo laravel" class="w3-image">
                    <p>Laravel</p>
                </div>

                <div class="tool w3-col s4 w3-center">
                    <img src="/img/phpstorm.png" alt="logo phpstorm" class="w3-image">
                    <p>PhpStorm</p>
                </div>

            </div>
        </div>
    </section>

    <section class="w3-padding w3-padding-48 w3-center ct-red">
        <h2 class="w3-xxlarge">Projets</h2>
        <p class="w3-large">Mes réalisations récentes</p>

        <div class="projects w3-row">
            <div class="project w3-col m6 l4"></div>
            <div class="project w3-col m6 l4"></div>
            <div class="project w3-col m6 l4"></div>
            <div class="project w3-col m6 l4"></div>
            <div class="project w3-col m6 l4"></div>
            <div class="project w3-col m6 l4"></div>
        </div>
    </section>
@endsection

