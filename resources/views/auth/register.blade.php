@extends('layouts.master')

@section('content')
  <section class="content-box">
    <header>
      <a style="color: teal" href="{{ url('/') }}">
        <h3 class="large-text">Galarie</h3>
      </a>
    </header>
    <div class="form-box">
      <form class="ui form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="field">
          <label for="name">Name</label>
          <input type="text" name="name" value="{{ old('name') }}" placeholder="Fullname" autofocus required>
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" placeholder="JohnDave@somemail.com" required>
        </div>
        <div class="field">
          <label for="password">Password</label>
          <input type="password" name="password" value="{{ old('password') }}" required>
        </div>
        <div class="field">
          <label for="name">Confirm password</label>
          <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
        </div>
        <div class="field">
          <button class="ui teal button full-width" type="submit">register</button>
        </div>
      </form>
    </div>
    @include('layouts.errors')
  </section>
@endsection