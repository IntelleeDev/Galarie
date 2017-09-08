@extends('dash.master')

@section('main-content')
  <section class="center-box">
    <header class="actions">
      <div>
        <h3 class="small-text">New album</h3>
      </div>
      <div>
        <a href="{{ url('albums') }}" class="ui tiny teal button"><i class="arrow left icon"></i>back</a>
      </div>
    </header>
    <section style="box-shadow: none" class="form-box">
      <div>
        <form id="new_album_form" class="ui small form" action="{{ route('new_album') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div style="position: absolute; left: 500px; top: 10px;">
            <div class="field">
              <label for="album-cover">Album cover</label>
                <img  id="imageview" class="image-view">
                <input id="album_cover" type="file" name="album_cover" accepts=".jpg .jpeg .gif .png" hidden>
                <div style="margin: 20px auto">
                  <button id="album_cover_btn" class="ui tiny teal button"><i class="cloud upload icon"></i>upload</button>
                </div>
              </div>
          </div>
          <div class="field">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" autofocus required>
          </div>
          <div class="inline field">
            <label for="description">Description</label>
            <textarea name="description" rows="2" required>{{ old('description') }}</textarea>
          </div>
          <div class="field">
            <label for="tags">Tags</label>
            <input type="text" name="tags" value="{{ old('tags') }}">
          </div>
          <div class="field">
            <button type="submit" class="ui small teal button full-width"><i class="plus icon"></i>create</button>
          </div>
        </form>
      </div>
    </section>
    @include('layouts.errors')
  </section>
@endsection

@section('scripts')
  <script>
    window.addEventListener('load', function(event) {
      
      var imageView = document.getElementById('imageview')
      var fileInputField = document.getElementById('album_cover')
      var newAlbumForm = document.getElementById('new_album_form')
      var uploadAlbumCoverBtn = document.getElementById('album_cover_btn')
      
      uploadAlbumCoverBtn.addEventListener('click', openFileDialog)
      fileInputField.addEventListener('change', processFileUpload)

      function processFileUpload(event) {
        var file = event.target.files[0]
        
        var fileReader = new FileReader();
        fileReader.addEventListener('load', function(event) {
          imageView.src = fileReader.result
        })

        fileReader.readAsDataURL(file)
      }

     function openFileDialog(event) {
       event.preventDefault()
       fileInputField.click()
     }

    })
  </script>
@endsection