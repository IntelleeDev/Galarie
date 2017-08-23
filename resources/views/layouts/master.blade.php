<!Doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Galarie') }}</title>
    
    <!-- Stylesheets here -->
    <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/commons.css') }}" rel="stylesheet">
    @yield('css')

  </head>
  <body>
    @yield('content')

    <!-- Scripts here -->
    <script src="{{ asset('js/jquery-1.8.1.js') }}"></script>
    <script src="{{ asset('js/semantic.js') }}"></script>
    @yield('scripts')
    
  </body>
</html>
