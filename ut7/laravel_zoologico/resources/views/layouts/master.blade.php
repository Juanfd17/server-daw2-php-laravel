<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="{{url('/assets/css/estilo.css')}}">
</head>
<body>
    @include('layouts.navbar')

    <div class="container-lg">
        @yield('contenido')
    </div>

    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
