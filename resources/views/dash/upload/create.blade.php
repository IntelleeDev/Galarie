@extends('dash.master')

@section('main-content')
  <section class="center-box">
    <header class="actions">
      <div>
        <h3 class="small-text">Upload photos</h3>
      </div>
      <div>
        <!-- Upload form -->
        <form id="upload_form" action="/upload/{{ $album->id }}/photo" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input id="photo_input_field" type="file" name="photos[]" multiple hidden>
        </form>
        <div class="ui icon buttons">
          <a class="ui small yellow button left-radi" href="{{ url('upload/select-album') }}"><i class="arrow left icon"></i></a>
          <button id="submit_button" class="ui small yellow button right-radi" type="submit"><i class="upload icon"></i></button>
        </div>        
      </div>
    </header>
    <section id="upload_canvas" class="upload-canvas">      
      <div class="prompt-text">
        <h2 class="ui primary curved-edge padded button">Click to open file dialog</h2>
      </div>     
    </section>
  </section>
@endsection

@section('scripts')
  <script src="{{ asset('/js/photo_upload.js' )}}"></script>
@endsection