<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
  <a class="navbar-brand" href="{{url('/')}}">Paquetería</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="{{route('transportistas.index')}}" class="nav-link {{ Request::is('transportista*') && !Request::is('paquetes/crear')? ' active' : ''}}">Todos los transportistas</a>
      </li>
      <li class="nav-item">
        <a href="{{url('/paquetes/crear')}}" class="nav-link {{ Request::is('paquetes/crear')? ' active' : ''}}">Nuevo paquete</a>
      </li>
    </ul>

  </div>
</nav>





