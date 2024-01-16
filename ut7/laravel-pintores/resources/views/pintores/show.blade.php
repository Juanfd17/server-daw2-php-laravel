@extends('layouts.master')
@section('titulo')
    Museo
@endsection
@section('contenido')
    @if(session('mensaje'))
        <div class="alert alert-info">
            {{session('mensaje')}}
        </div>
    @endif
    <h1 class="text-danger">{{$pintor->nombre}}</h1>

    <h2>pais: {{$pintor->pais}}</h2>
    <h2>Cuadros</h2>

    <div class="row">
        @foreach($pintor->cuadros as $cuadro)
            <div class="col-4">
                <h5 class="text-primary">{{$cuadro->nombre}}</h5>
                <img class="img-fluid" src="{{asset('assets/img/cuadros')}}/{{$cuadro->imagen}}">

                @php $exposiciones = \App\Models\Cuadro::findorFail($cuadro->id)->exposiciones;@endphp

                @foreach($exposiciones as $exposicion)
                    <p class="text-success">{{$exposicion->nombre}}</p>
                @endforeach

                @if($cuadro->disponible)
                    <button class="btn-danger btn text-light"><a href="{{route('cuadro.cambiarEstado', $cuadro)}}" class="text-light">Marcar como No disponible</a></button>
                @else
                    <button class="btn-success btn text-light"><a href="{{route('cuadro.cambiarEstado', $cuadro)}}" class="text-light">Marcar como Disponible</a></button>
                @endif
            </div>

        @endforeach
    </div>
@endsection
