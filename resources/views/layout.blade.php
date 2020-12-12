<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/logo.ico">
    <meta name="theme-color" content="#442b22" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="KPGTS 2020" />
    <meta property="og:image" content="https://kpgts2020.com/img/logo.png" />
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:url" content="{{ 'https://kpgts2020.com' }}@yield('url')" />

    <title>@yield('title') | KPGTS 2020</title>

    {{-- Fonts --}}
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,600" />

    {{-- Styles --}}
    @yield('before-styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/layout.css" />

    @yield('after-styles')

  </head>
  <body>
    <nav class="navbar is-blue" role="navigation" aria-label="main navigation">
      @include('inc.navbar')
    </nav>

    <main class="main"> @yield('main')</main>

    <footer class="footer">
      @include('inc.footer')
    </footer>
  
  </body>

  @yield('before-scripts')
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
  <script src="/js/navbar.js"></script>
  @yield('after-scripts')

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141178655-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-141178655-3');
  </script>
</html>
