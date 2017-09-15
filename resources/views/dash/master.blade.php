@extends('layouts.master')

@section('css')
  <link href="{{ asset('css/commons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
 
@endsection

@section('content')
  <section>
    @include('dash.header')
    @include('dash.sidebar')
    <br>
    <div class="content-frame">
      @yield('main-content')
    </div>
  </section>
@endsection

@section('scripts')
  <script>
    window.addEventListener('load', function(event) {
      var logoutBtn = document.getElementById('logout'),
          logoutForm = document.getElementById('logoutForm')

      logoutBtn.addEventListener('click', function(event) {
        logoutForm.submit()
      })
    })
  </script>
@endsection