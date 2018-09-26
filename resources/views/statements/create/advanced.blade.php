@extends('statements.create')

@section('forms')
  <div class="form-group">
    <label for="subtitle" class="sr-only">Subtitle:</label>
    <input type="text" id="subtitle" name="subtitle" class="form-control" placeholder="A subtitle" autofocus>
  </div>

  <div class="form-group">
    <label for="img" class="sr-only">Subtitle:</label>
    <input type="text" id="img" name="img" class="form-control" placeholder="Image URL" autofocus>
  </div>
@endsection
