@extends('dash.master')

@section('main-content')  
  <section class="main-content">
    <section class="actions">
      <div>
        <h3 class="small-text">Albums</h3>
      </div>
      <div>
        <a class="ui small teal button" href="{{ url('/album/create') }}"><i class="plus icon"></i>new album</a>
      </div>
    </section>
    
    <br><br>

    <div class="ui padded cards">      
    @if(count($albums) > 0)
      @foreach($albums as $album)
      <div class="ui card">
        <div class="image">
          <img src="{{ Storage::url($album->album_cover) }}" alt="album cover">
        </div>
        <div class="content">
          <a class="right floated ui tiny teal button" href="/album/{{ $album->id }}/photos">open</a>
          <div class="header">
            <h4 class="heading">{{ $album->title }}</h4>
          </div>
          <div class="meta">
            <span>{{ $album->totalPhotos() }} photos</span>
          </div>
        </div>
      </div>
      @endforeach
    @endif
    </div>
  </section>
@endsection