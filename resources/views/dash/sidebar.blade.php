<aside class="sidebar">
  <header class="header">
    <h2><a href="{{ route('home') }}">Galarie</a></h2>
  </header>
  <ul>
    <a href="{{ route('home') }}">
      <li><i class="browser icon"></i>&nbsp;&nbsp;Wall</li>
    </a>
    <a href="{{ route('albums') }}">
      <li><i class="folder icon"></i>&nbsp;&nbsp;Albums</li>
    </a>
    <a href="{{ url('/upload/select-album') }}">
      <li><i class="cloud icon"></i>&nbsp;&nbsp;Uploads</li>
    </a>
    <a href="{{ url('/user/settings') }}">
      <li><i class="cogs icon"></i>&nbsp;&nbsp;Settings</li>
    </a>          
  </ul>
</aside>