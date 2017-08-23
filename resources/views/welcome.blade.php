<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Galarie') }}</title>
    
    <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/commons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">    
    
  </head>
  <body>
    <header class="menu-bar">
      <h3 class="logo-text">Galarie</h3>
    </header>
    <section class="content-box">
      <header class="caption">
        <h2 class="large-text teal">Create awesome moments</h2>
      </header>
      <div class="polaroid-box">
        <img class="polaroid" src="{{ asset('images/sky.jpg') }}" alt="apples">
        <img class="polaroid" src="{{ asset('images/ocean.jpg') }}" alt="journey">
        <img class="polaroid" src="{{ asset('images/safari.jpg') }}" alt="lecrea">
        <img class="polaroid" src="{{ asset('images/safari.jpg') }}" alt="lecrea">
      </div>
      <div class="deep-canvas">
        <div class="text-box">
          <h3 class="small-text">Keep track of all your photos</h3>
        </div>
      </div>
      <div class="controls">
        <div>
           <a class="ui small basic teal button" href="{{ route('login') }}">sign in</a>
        </div>
        <div>
          <a class="ui small basic teal button" href="{{ route('register') }}">sign up</a>
        <div>
      </div>  
    </section>
  </body>
</html>