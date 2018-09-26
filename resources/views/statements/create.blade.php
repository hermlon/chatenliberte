@extends('layout')

@section('title', 'Your Statement')

@section('content')

  <div class="container">
    <form class="form-signin" method="POST" action="{{ route('statement') }}">
      @csrf

      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Your statement:</h1>

      <div class="form-group">
        <label for="title" class="sr-only">Statement:</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Some statement" autofocus required>
      </div>

      @yield('forms')

      <button class="btn btn-lg btn-primary btn-block btn-margin" type="submit">Submit</button>

      @include('layouts.errors')
    </form>
  </div>

@endsection
