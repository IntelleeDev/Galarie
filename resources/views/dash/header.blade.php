<header class="menu-bar">
  <div class="flex-box">
    <div style="padding: 15px">
      <h3 class="teal brand">Galarie</h3>
    </div>
    <div style="text-align: right">
      <button id="logout" class="ui teal basic curved-edge padded button"><i class="sign out icon"></i> logout</button>
      <span>
        <form id="logoutForm" hidden method="POST" action="{{ route('logout') }}">
          {{ csrf_field() }}
        </form>
      </span>
      <span class="name-text"><i class="icon user"></i>  {{ Auth::user()->name }}</span>
    </div>
  </div>
</header>