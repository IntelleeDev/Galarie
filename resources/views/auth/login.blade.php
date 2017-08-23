@extends('layouts.master')

@section('content')
  <section class="content-box">
    <header>
      <a style="color: teal" href="{{ url('/') }}">
        <h3 class="large-text">Galarie</h3>
      </a>
    </header>
    <div class="form-box">
      <form class="ui form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="field">
          <label for="email">E-mail Address</label>
          <input type="email" name="email" value="{{ old('email') }}"  placeholder="johndoe@mail.com" required autofocus>
        </div>
        <div class="field">
          <label for="password">Password</label>
          <input type="password" name="password" required>
        </div>
        <div class="field">
          <button class="ui teal button full-width" type="submit">login</button>
        </div>
        <div>
          <div class="inline field">
            <div>
              <div class="ui checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} tabindex="0" class="hidden">
                <label>Remember me</label>
              </div>
              <a style="margin-left: 80px" href="{{ route('password.request') }}">forgot password</a>
            </div>  
          </div>          
        </div>
      </form>
    </div>
    @include('layouts.errors')
  </section>
@endsection

@section('scripts')
  <script>
    $('.ui.checkbox').checkbox();
  </script>
@endsection