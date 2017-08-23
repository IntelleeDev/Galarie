@if(count($errors->all()) > 0)
  <div class="ui red message">
    <div class="header">
      <h5>There where some errors with your submission</h5>
    </div>
    <ul class="list">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
