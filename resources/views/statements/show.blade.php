@extends('layout')

@section('title', 'Share link via WhatsApp')

@section('content')

  <div class="container">
    <div class="form-signin">
      <p class="text-center">Send this link via WhatsApp to see the hidden message:</p>
      <input type="text" class="form-control btn-margin" value="{{ $link }}">
      <a href="whatsapp://send?text={{ $link }}" data-action="share/whatsapp/share" class="whatsapp-link">
        <i class="material-icons whatsapp-icon">chat</i>
        <span>Share via WhatsApp</span>
      </a>

      @include('layouts.logo')
    </div>
  </div>

@endsection
