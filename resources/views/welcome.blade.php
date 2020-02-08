@extends('layouts.master')

@section('main')
  <body>
    <div class="flex-center position-ref">
      <div class="main">
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
      <p style="color: black; opacity:.6; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; bottom: 0%; margin-bottom: -60px; text-align: center;">
        Created by Mason Eyre
        <br/>
        <a href="http://www.masoneyre.com" target='_blank'>
          www.masoneyre.com
        </a>
      </p>
    </div>
  </body>
@endsection
