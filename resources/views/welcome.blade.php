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

            .container {
                width: 100%;
                display: flex;
                flex-direction: row;
                padding: 4%;
            }
            .img_gauche {
                width: 30%;
                position: relative;
                padding: 10px;
                margin-top: 30px;

            }

            .contenu {
                width: 60%;
                position: relative;
                display: flex;
                flex-direction: column;
            }

            .baniere {
                width: 100%;
                color: #636b6f;
                font-weight: 100;
                font-size: 400%;
                font-family: "Comic Sans MS", cursive, sans-serif;
                text-align: center;
                padding-bottom: 100px;
                background-image: url("img/arrierePlanBaniere.jpg");
            }
            
            .mainContent {
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                margin: auto;

            }

            .nav_zone {
                width: 40%;
                display: flex;
                flex-direction: column;
                padding-top: 40px;
            }

            .nav_zone a {
                color: #440044;
                text-decoration: none;
                margin: 5px;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-size: 140%;
            }

            .nav_zone a:hover {
                color: #e83e8c;
                margin: 5px;
            }

            .homeContent {
                color: black;
                width: 55%;
                font-weight: 400;
                font-family: 'Raleway', sans-serif;

            }

            .titre {
                width: 100%;
                padding: 5px;
                background-image: url("img/couleurs.jpg");
                color: white;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-weight: 400;
                text-align: center;
            }

            .actu {
                color: #636b6f;
                text-align: center;
                width: 30%;
                margin: 5px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                padding: 10px;
            }

            .actu h4 {
                font-family: "Lucida Console", Monaco, monospace;
                color: #440044;
                font-size: large;
            }

            .footer {

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
