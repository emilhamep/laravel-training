<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Aplikasi Manajemen Buku - @yield('title')</title>
  </head>
  <body>
    <header class="container">
      <div class="page-header">
        <h1><a href="{{url('/buku/')}}">Manajemen Buku</a> <small>@yield('header-title')</small></h1>
      </div>
    </header>
    <section class="row container">
      <div class="col-md-offset-1 col-md-7">
        @yield('content')
      </div>
      <div class="col-md-4">
        @yield('navigation')
      </div>
    </section>
    <footer align="center">
      ©2017 @yield('name-copyright')
    </footer>
  </body>
</html>
