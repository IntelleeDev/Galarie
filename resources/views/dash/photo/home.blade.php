@extends('dash.master')

@section('main-content')
  <section class="main-content">
    <header class="actions">
      <div>
        <h3 class="small-text">{{ $album->title }}</h3>
      </div>
      <div>
        <a href="{{ route('albums') }}" class="ui tiny teal button"><i class="arrow left icon"></i>back</a>
      </div>
    </header>
    <section class="generic-container">
      <div class="ui small rounded images">
        @foreach ($photos as $photo)
          <img class="ui rounded image" src="{{ Storage::url($photo->store_path) }}"/>
        @endforeach
      </div>
    </section>
  </section>
@endsection