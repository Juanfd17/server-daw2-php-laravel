<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{url('/')}}">Zoológico</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      {{--@if(Auth::check() )--}}
      
      <li class="nav-item">
        <a href="{{route('animales.index')}}" class="nav-link {{ request()->routeIs('animales.*') && !request()->routeIs('animales.create')? ' active' : ''}}">Listado de animales</a>
      </li>
      <li class="nav-item">
        <a href="{{route('animales.create')}}" class="nav-link {{ request()->routeIs('animales.create')? ' active' : ''}}">Nuevo animal</a>
      </li>
    </ul>
    {{--@endif --}}
    @if(Auth::check() )
        <form class="d-flex">
          <input id="busqueda" class="form-control mr-sm-3" type="text" placeholder="Buscar" aria-label="Buscar">
        </form>
        
        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}"  class="nav-link">
              {{ Auth::user()->name }}
            </a>
          </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}"  class="nav-link"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();" >
                    <span class="glyphicon glyphicon-off"></span>
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    @else
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a href="{{url('login')}}" class="nav-link">Login</a>
            </li>
        </ul>
    @endif 
  </div>
</div>
</nav>
