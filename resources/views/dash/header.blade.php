<header class="menu-bar">
  <div>
    <div style="text-align: right">
      <button id="logout" class="ui teal basic button"><i class="sign out icon"></i> signout</button>
      <span>
        <form id="logoutForm" hidden method="POST" action="{{ route('logout') }}">
          {{ csrf_field() }}
        </form>
      </span>
      <span class="name-text">{{ Auth::user()->name }}</span>
    </div>
  </div>
</header>