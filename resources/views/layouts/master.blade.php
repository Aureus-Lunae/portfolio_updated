<!doctype html>
<html lang="en-US">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content=" " />
  <meta name="keywords" content=" " />
  <meta name="author" content="Erwin Korsten" />
  <meta name="theme-color" content="#bf9b30" />
  <title>@yield('title','portfolio')</title>

  <!-- Fonts -->

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

</head>

<body>
  <div class="stars">
    <span class="twinkling">
    </span>
  </div>

  <div id="page_wrapper">

    <div id="header_wrapper">
      {{-- @include('includes.header') --}}
    </div>

    <div id="content_wrapper">
      @yield('content')
    </div>

    <div id="footer_wrapper">
      {{-- @include('layouts.footer') --}}
    </div>

  </div>

  @yield('scripts', '')

</body>

</html>