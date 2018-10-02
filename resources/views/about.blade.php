@extends('layout')

@section('title', 'About')

@section('content')

  <div class="container form-signin">

    <h1 class="h1 mb-3 font-weight-normal">About</h1>
    <h2 class="h2 mb-3 font-weight-normal">How does this work?</h2>
    <p>
      When you send a link via WhatsApp the server looks up the page you linked
      to and sends the information found in the
      <code>{{ '<meta property="og:title" content="content" />' }}</code>
      back to the client which displays it above the link.
    </p>
    <p>
      The properties
      <code>og:description</code> and <code>og:image</code> are available in the
      advanced mode and appear as a subtitle in light gray and as an squared image
      to the left of the send message.
    </p>
    <p>
      What's really fun about this is, that WhatsApp caches the link requests.
      Therefore the chatenliberte server deletes the uploaded content as soon as
      WhatsApp made a request and cached the result on their servers.
    </p>

    <h2><a class="nounderline deco-none" href="https://youtu.be/-yuBpUrvpLQ?t=2m30s" target="_blank">WHY?</a></h2>
    <p>
      Well, first of all, because it is possible. I can't think of a real use case
      right now apart from <i>"not being that responsible for the content because I only linked
      to it and am definitely not the one who uploaded this"</i>.
    </p>

    @include('layouts.logo')

  </div>

@endsection
