<header class="menu-bar">
  <div class="flex-box">
    <div style="padding: 15px">
      <h3 class="teal brand">Galarie</h3>
    </div>
    <div style="text-align: right">
      <div class="name-text padded-12">
        <span><i class="icon user"></i>  {{ Auth::user()->name }}</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <form style="display: inline" method="POST" action="{{ route('logout') }}">
          {{ csrf_field() }}
          <button type="submit" class="ui teal icon circular button"><i class="white power icon"></i></button>
        </form>
      </div>
    </div>
  </div>
</header>