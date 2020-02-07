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
              padding: 70px;
              border-radius: 75px;
              margin: 50px;
              padding-bottom: 20px;
              margin-bottom: 150px;
            }

            .title {
              font-size: 70px;
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
            .grid > a{
              color: #FFFFFF;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 500;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
            }
            .grid {
              display: flex;
              flex-wrap: wrap;
              display: grid;
              grid-template-columns: repeat(2, minmax(20px, auto));
              grid-auto-rows: minmax(20px, auto);
              grid-gap: 30px;
            }
            .module {
              display: flex;
              align-items: center;
              justify-content: center;
              height: 20px;
              margin-left: 5px;
              margin-right: 5px;
              flex: 1 1 100px;
            }

            .m-b-md {
              margin-bottom: 30px;
            }
            .background{
              background-color: #808080;
              height: calc(110vh);
              overflow-y: auto;
              background-size: cover;
              background-position: center;
              background-repeat: repeat;
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
                <div class="grid">
                    <a href="https://appestimation.herokuapp.com/" target='_blank' class='module'>
                      <u>-App Estimator-</u>
                    </a>
                    <a href="http://triptrackplan.herokuapp.com/" target='_blank' class='module'>
                      <u>-Trip Tracker-</u>
                    </a>
                    <a href="http://www.ceojanitorial.com/" target='_blank' class='module'>
                      <u>-CEO Janitorial-</u>
                    </a>
                    <a href="https://repl.it/@MasonMan/Ruby-Store" target='_blank' class='module'>
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
            </div>
            <p style="opacity:.5; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; bottom: 1%; text-align: center;">
              Created by Mason Eyre
              <br/>
              <a href="http://www.masoneyre.com" target='_blank'>
                www.masoneyre.com
              </a>
            </p>
        </div>
    </body>
</html>
