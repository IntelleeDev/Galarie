<aside class="sidebar">
  <ul>
    <a href="{{ route('home') }}">
      <li><i class="home icon"></i>  Home</li>
    </a>
    <a href="{{ route('albums') }}">
      <li><i class="folder icon"></i>   albums</li>
    </a>
    <a href="{{ url('/upload/select-album') }}">
      <li><i class="cloud icon"></i>   uploads</li>
    </a>
    <a href="{{ url('/user/settings') }}">
      <li><i class="settings icon"></i>   settings</li>
    </a>          
  </ul>
</aside>