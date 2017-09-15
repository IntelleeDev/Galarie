@extends('dash.master')

@section('main-content')  
  <section class="center-box">
    <section class="actions">
      <div>
        <h3 class="small-text">Albums</h3>
      </div>
      <div>
        <a class="ui small yellow curved-edge button" href="{{ url('/album/create') }}"><i class="plus icon"></i>new album</a>
      </div>
    </section>
    
    <br><br>

    <div class="ui padded cards">      
    @forelse($albums as $album)
      <div class="ui card">
        <div class="image">
          <img src="{{ Storage::url($album->album_cover) }}" alt="album cover">
        </div>
        <div class="content">
          <form data-albumid="{{ $album->id }}" id="deleteForm" hidden action="#" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
          </form>
          <button class="delete right floated ui tiny red icon button"><i class="trash icon"></i></button>
          <a class="right floated ui tiny yellow icon button" href="/album/{{ $album->id }}/photos"><i class="folder open icon"></i></a>
          <div class="header">
            <h4 class="heading">{{ $album->title }}</h4>
          </div>
          <div class="meta">
            <span>{{ $album->totalPhotos() }} photos</span>
          </div>
        </div>
      </div>
    @empty 
      @include('dash.noalbum')
    @endforelse
    </div>

    <!-- Delete Album Modal -->
    <div class="ui basic modal">
      <div class="ui icon header">
        <i class="trash outline icon"></i>
        Delete album
      </div>
      <div class="content">
        <p>Are you sure you want to delete this album? Doing this is irreversible</p>
      </div>
      <div class="actions">
        <div class="ui red basic cancel inverted button">
          <i class="remove icon"></i>
          No
        </div>
        <div id="delete" class="ui green ok inverted button">
          <i class="checkmark icon"></i>
          Yes
        </div>
      </div>
    </div>
    <!-- Modal Ends Here -->

  </section>
@endsection

@section('scripts')
  <script>
    window.addEventListener('load', function(event) {
      var deleteButton = document.getElementById('delete'),
          deleteForm   = document.getElementById('deleteForm')

      deleteButton.addEventListener('click', function(event) {
        deleteForm.action = "album/" + deleteForm.dataset.albumid
        deleteForm.submit()
      })

      $('.delete').on('click', function(event) {
        $('.ui.basic.modal').modal('show')
      }) 
    })
  </script>
@endsection