<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Laravel App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #FFFFFF;
                font-family: 'Helveticca', sans-serif;
                font-weight: 200;
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
                right: 20px;
                top: 20px;
            }

            .content {
                text-align: center;
                background-color: #2A2A2A;
                padding: 90px;
                border-radius: 75px;
            }

            .title {
                font-size: 80px;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .background{
              background-color: #808080;
            }

        </style>
    </head>
    <body class='background'>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    My First Laravel App
                </div>

                <p class='links'>
                  <a href="http://www.masoneyre.com" target='_blank'>
                    <u>-My Website-</u>
                  </a>
                </p>
                <br/>
                <h2>My Projects</h2>
                <div class="links">
                    <a href="https://appestimation.herokuapp.com/" target='_blank'>
                      <u>-App Estimator-</u>
                    </a>
                    <a href="http://triptrackplan.herokuapp.com/" target='_blank'>
                      <u>-Trip Tracker-</u>
                    </a>
                    <a href="http://www.ceojanitorial.com/" target='_blank'>
                      <u>-CEO Janitorial-</u>
                    </a>
                    <a href="https://repl.it/@MasonMan/Ruby-Store" target='_blank'>
                      <u>-Ruby Store-</u>
                    </a>
                </div>
                <br/>
                <p class='links'>
                  You can see more on my GitHub!
                  <br/>
                  <a href="https://github.com/DudeMason" target='_blank'>
                    <u>-GitHub-</u>
                  </a>
                </p>
                <br/>
                <p style="opacity:.5; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; bottom: 20px;">
                  Created by Mason Eyre
                  <br/>
                  <a href="http://www.masoneyre.com" target='_blank'>
                    www.masoneyre.com
                  </a>
                </p>
            </div>
        </div>
    </body>
</html>
