<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $statement->title }}</title>
    <meta property="og:title" content="{{ $statement->title }}" />
    <meta property="og:description" content="{{ $statement->subtitle }}" />
    @if (is_null($statement->localimg))
      <meta property="og:image" content="{{ $statement->img }}" />
    @else
      <meta property="og:image" content="{{ url(\Storage::url($statement->localimg)) }}" />
    @endif
  </head>
  <body>
    <p>When you see this you successfully set your user agent to contain "WhatsApp".</p>
  </body>
</html>
