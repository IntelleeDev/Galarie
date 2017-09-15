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
      <h3 class="white brand">Galarie</h3>
    </header>
    <section class="ui container">
      <div class="ui stackable center aligned relaxed grid">        
        <div class="row">
           <header class="caption">
            <h2 class="white large-text">Create awesome moments</h2>
          </header>
        </div>
        <div class="row">
          <div>
            <div class="polaroid">
              <img src="{{ asset('images/background3.jpg') }}" alt="apples">
            </div>
            <div class="polaroid">
              <img src="{{ asset('images/safari.jpg') }}" alt="apples">
            </div>
            <div class="polaroid">
              <img src="{{ asset('images/ocean.jpg') }}" alt="apples">
            </div>       
          </div>
        </div>  
        <div class="row">
          <div class="spacer">
            <h3 class="white small-text">share your treasured memories</h3>
          </div>
        </div>             
        <div class="row">
          <div class="controls">
            <div>
              <a class="ui large teal curved-edge padded button" href="{{ route('login') }}"><i class="sign in icon"></i>sign in</a>
            </div>
            <div>
              <a class="ui large teal curved-edge padded button" href="{{ route('register') }}"><i class="user o icon"></i>sign up</a>
            <div>
          </div>
        </div>        
      </div>  
    </section>
  </body>
</html>