<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;



                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
    <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
        </div>   -->

    <div id="home">
        <div class="container">

            <img class="img_gauche" src="{{ URL::asset('img/voiture1.jpg') }}" alt="">

            <div class="contenu">
                <div class="baniere">
                    Auto Ecole Du Berger
                </div>
                
                <div class="mainContent">
                    <div class="nav_zone">
                        <a href="">Qui sommes nous</a>
                        <a href="">Nos formations</a>
                        <a href="">Nos Services</a>
                        <a href="">Nos agences</a>
                        <a href="">Permis moto</a>

                        <a href="">Contact</a>
                    </div>

                    <div class="homeContent">
                        <p>
                            Bienvenu à l'auto école Du Berger, votre .................................................
                            .................................................................................
                            ......................................................................................
                            .......................................................................................
                        </p>
                        <p>
                            Pour une bonne formation en  .................................................
                            .................................................................................
                            ......................................................................................
                            .......................................................................................
                        </p>

                    </div>
                </div>
                <h2 class="titre">Actualité</h2>
                <div class="mainContent">

                    <div class="actu">
                        <h4>Promotion Spécial Vacances</h4>
                        <hr>

                        C'est vacances, ................. .................... .................. ................. ...
                        .................. ............. ..................... ............. .. ...................... .....
                        ..................... ......................... ..................... ................... ...
                        ............. .................... ..................... ......................... .............
                        ...................... ..................... ....................... ..................... .

                    </div>

                    <div class="actu">
                        <h4> Journée Débats </h4>
                        <hr>

                        C'est vacances, ................. .................... .................. ................. ...
                        .................. ............. ..................... ............. .. ...................... .....
                        ..................... ......................... ..................... ................... ...
                        ............. .................... ..................... ......................... .............
                        ...................... ..................... ....................... ..................... .

                    </div>

                    <div class="actu">
                        <h4>Promotion Permi A</h4>
                        <hr>

                        Conducteurs de motos, ................. .................... .................. ................. ...
                        .................. ............. ..................... ............. .. ...................... .....
                        ..................... ......................... ..................... ................... ...
                        ............. .................... ..................... ......................... .............
                        ...................... ..................... ....................... ..................... .

                    </div>

                </div>

                

            </div>
        </div>


        <!--   LE FOOTER   -->

        <div class="footer">
            <div>
                Suiver 
            </div>
        </div>



    </div>



    </body>
</html>
