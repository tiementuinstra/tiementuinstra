<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $meta->description }}">
    <meta name="keywords" content="{{ $meta->keywords }}">
    <meta name="author" content="{{ $meta->author }}">
    <link rel="icon" type="{{ $webconfig->favicon->formats->thumbnail->mime }}" href="{{$strapipath}}{{ $webconfig->favicon->formats->thumbnail->url }}">
    <link rel="apple-touch-icon" sizes="180x180"  href="{{$strapipath}}{{ $webconfig->favicon->formats->thumbnail->url }}">
    <link rel="icon" type="{{ $webconfig->favicon->mime }}"  href="{{$strapipath}}{{ $webconfig->favicon->formats->thumbnail->url }}">
    <link rel="icon" type="{{ $webconfig->favicon->mime }}"  href="{{$strapipath}}{{ $webconfig->favicon->formats->thumbnail->url }}">
    <title>{{ $pagetitle }} | {{ $webconfig->name }}</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">

  </head>