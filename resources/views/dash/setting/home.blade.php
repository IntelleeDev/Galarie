@extends('dash.master')

@section('main-content')
  <section class="center-box">
    <header class="actions">
      <div>
        <h3 class="small-text"></h3>
      </div>
      <div>
        
      </div>
    </header>
    <section class="ui container">
      <div class="ui two column grid">
        <div class="ui eight wide colum">
          <!-- Profile Section -->
          <div class="ui blue padded segment">
            <div class="ui two colum grid">
              <div>
                <span class="settings-heading">Profile</span>
              </div>
              <div class="right aligned">
                <span class=""><i class="pencil icon"></i> edit</span>
              </div>         
            </div>
            <div>
              <label>
                <i class="teal user icon"></i> {{ Auth::user()->name }}
              </label>
            </div>
          </div>
        </div>

        <!-- Account Section -->
        <div class="ui yellow padded segment">
          <p class="settings-heading">Change your password</p>
        </div>  
      </div>
    </section>
  </section>
@endsection