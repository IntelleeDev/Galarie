@extends('layouts.master')

@section('css')
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
  <section>
    <header class="menu-bar">
      <div class="flex-box">
        <div>
          <a href="{{ route('home') }}">
            <h2>Galarie</h2>
          </a>
        </div>
        <div>
          <div class="controls-frame ui right aligned">
            <form method="POST" action="{{ route('logout')}}">
              {{ csrf_field() }}
              <button class="ui small teal button" type="submit">logout</button>
            </form>
            <div>
              <h4>{{ Auth::user()->name }}</h4>
            </div>
          </div>
        </div>
      </div>    
    </header>

    <section class="content-area">
      @include('dash.sidebar')
      @yield('main-content')
    </section>
  </section>
@endsection