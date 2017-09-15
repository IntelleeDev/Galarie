@extends('dash.master')

@section('main-content')
  <section class="center-box">
    <header class="actions">
      <div>
        <h3 class="small-text">Select album to upload to</h3>
      </div>
      <div></div>
    </header>
    <section class="albums-box">
    @forelse($albums as $album)
      <div class="album-item">
        <a href="{{ route('upload',['album' => $album->id]) }}">
          <img class="ui fluid image" src="{{ Storage::url($album->album_cover) }}">
          <div class="ui basic yellow curved-edge button meta">
            {{ $album->title  }}
          </div>
        </div>
      </a>
    @empty
     @include('dash.noalbum')
    @endforelse
    </section>
  </section>
@endsection