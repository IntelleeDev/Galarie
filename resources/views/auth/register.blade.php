@extends('layouts.master')

@section('content')
  <section class="content-box">
    <div class="form-box">
      <div class="head">
        <h3>
          <a style="color: teal" class="large-text" href="{{ url('/') }}">Galarie</a>
        <h3>
      </div>
      <form class="ui form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="field">
          <label for="name">Name</label>
          <input class="curved-edge" type="text" name="name" value="{{ old('name') }}" placeholder="Fullname" autofocus required>
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input class="curved-edge" type="email" name="email" value="{{ old('email') }}" placeholder="JohnDave@somemail.com" required>
        </div>
        <div class="field">
          <label for="password">Password</label>
          <input class="curved-edge" type="password" name="password" value="{{ old('password') }}" required>
        </div>
        <div class="field">
          <label for="name">Confirm password</label>
          <input class="curved-edge" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
        </div>
        <div class="field">
          <button class="ui teal button curved-edge full-width" type="submit">register</button>
        </div>
        <div style="margin: 20px 0px 5px 0px; text-align: center">
          <strong>
            Already a member <a href="{{ route('login') }}">sign in</a>
          </strong>
        </div>
      </form>
    </div>
    @include('layouts.errors')
  </section>
@endsection