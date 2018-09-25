@extends('layout')

@section('content')

  <form class="form-signin" method="POST" action="/s">
    @csrf

    <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Your statement:</h1>

    <div class="form-group">
      <label for="statement" class="sr-only">Statement:</label>
      <input type="text" id="statement" name="statement" class="form-control" placeholder="Some statement" autofocus>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>

    @include('layouts.errors')
  </form>

@endsection
