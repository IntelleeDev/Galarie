@extends('dash.master')

@section('main-content')
  <section class="main-content">
    <header class="actions">
      <div>
        <h3 class="small-text">Select album to upload to</h3>
      </div>
      <div></div>
    </header>
    <section class="albums-box">
    @if (count($albums) > 0)
      @foreach($albums as $album)
        <div class="album-item">
          <div>
            <img class="ui fluid rounded image" src="{{ Storage::url($album->album_cover) }}" alt="image">
          </div>
          <a href="{{ '/upload/photo/'.$album->id }}" class="meta">
            <h4>{{ $album->title }}</h4>
          </a>
        </div>
      @endforeach
    @endif
    </section>
  </section>
@endsection