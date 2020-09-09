<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>

    <!-- HEADER -->
    <header>
      @include('album.partials.header')
    </header>

    <!-- MAIN -->
    <main>
      @yield('main_content')
    </main>

    <!-- FOOTER -->
    <footer>
      {{-- @include('album.partials.footer') --}}
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
