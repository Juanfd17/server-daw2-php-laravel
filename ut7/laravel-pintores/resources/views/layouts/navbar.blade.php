<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{url('/')}}">Museos</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      {{--@if(Auth::check() )--}}

      <li class="nav-item">
        <a href="{{route('pintores.index')}}" class="nav-link">Listado de pintores</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link #">Nuevo cuadro</a>
      </li>
    </ul>
  </div>
</div>
</nav>
