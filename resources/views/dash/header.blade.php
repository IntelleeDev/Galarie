<header class="menu-bar">
  <div class="flex-box">
    <div style="padding: 15px">
      <h3 class="teal brand">Galarie</h3>
    </div>
    <div style="text-align: right">
      <span>
        <form id="logoutForm" hidden method="POST" action="{{ route('logout') }}">
          {{ csrf_field() }}
        </form>
      </span>
      <div class="name-text padded-12">
        <span><i class="icon user"></i>  {{ Auth::user()->name }}</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span id="logout" class="ui teal icon button"><i class="white power icon"></i></span>
      </div>
    </div>
  </div>
</header>