@extends('layout')

@section('content')

  <div class="container-fluid">
    <p class="text-center">Send this link via WhatsApp to see the hidden message:</p>
    <input type="text" class="form-control" value="{{ $link }}">
    <a href="https://web.whatsapp.com/send?text={{ $link }}" data-action="share/whatsapp/share">Share via Whatsapp web</a>
  </div>

@endsection
