<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" >
    
    <title>@yield('titulo')</title>
  </head>
  <body>
    @include('layouts.navbar')
    <div class="container mt-5 pt-3">
      @yield('contenido')
    </div>

    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}" ></script>
   
  </body>
</html>
