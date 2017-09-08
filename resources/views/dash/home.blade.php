@extends('dash.master')

@section('main-content')
  <section class="center-box">
    <div class="album-grid-frame">
      @if ($featuredAlbum)
        <div>
          <h3>Featured album</h3>
          <div class="meta-overlay">
            <div><h4>{{ $featuredAlbum->title }}</h4></div>
            <div>
              <span><i class="image icon"></i>&nbsp; {{ ($featuredAlbum->photos()->count()) }} photos</span>
              &nbsp;&nbsp;
              <span><i class="heart icon"></i> 4 likes</span>
            </div>  
          </div>
          <img class="ui image" src="{{ Storage::url($featuredAlbum->album_cover) }}" alt="background">        
        </div>
      @else
        
      @endif
    </div>
    <h3>Your collections</h3>
    
    <div class="album-row">
      @foreach ($albums as $album)
        <div>
          <img class="ui fluid image" src="{{ Storage::url($album->album_cover) }}" alt="{{ $album->title }}"/>
        </div>
      @endforeach
    </div>
  
  </section>
@endsection