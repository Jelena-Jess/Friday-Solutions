<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Friday Solutions')</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="body">
  <div>
  
  @if(\Request::is("/"))
    @include('inc.header')
  @else 
    @include('inc.header_pages')
  @endif

  @include('inc.sidebar')
  
 {{-- MAIN CONTENT --}}
  <div class="container">
    @include('inc.messages')
    @yield('content')
  </div>

  
  @include('inc.footer')

  </div>

<!-- Scripts -->

 <!-- AniJS core library -->
 <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
 <!-- Include to use $addClass, $toggleClass or $removeClass -->
 <script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>
 <script src="https://anijs.github.io/lib/anijs/anijs.js"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom.js"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal.js"></script>
<script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.7.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();
    $('section').css({
      'background-position-x' : - scroll_position + 'px';
    })
  })
</script>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>

</body>
</html>


