@extends('dash.master')

@section('main-content')
  <section class="center-box">
    <header class="actions">
      <div>
        <h3 class="small-text">{{ $album->title }}</h3>
      </div>
      <div>
        <a href="{{ route('albums') }}" class="ui tiny yellow curved-edge button"><i class="arrow left icon"></i> back</a>
      </div>
    </header>
    <section class="generic-container">
      <div class="ui small rounded images">
        @forelse ($photos as $photo)
          <img class="ui rounded image" src="{{ Storage::url($photo->store_path) }}"/>
        @empty
          @include('dash.nophotos')
        @endforelse
      </div>
    </section>
  </section>
@endsection