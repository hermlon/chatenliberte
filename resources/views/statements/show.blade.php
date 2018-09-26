@extends('layout')

@section('content')

  <div class="container-fluid">
    <p class="text-center">Send this link via WhatsApp to see the hidden message:</p>
    <input type="text" class="form-control" value="{{ $link }}">
    <a href="whatsapp://send?text={{ $link }}" data-action="share/whatsapp/share"><i class="material-icons">
chat
</i> Share via WhatsApp</a>
  </div>

@endsection
