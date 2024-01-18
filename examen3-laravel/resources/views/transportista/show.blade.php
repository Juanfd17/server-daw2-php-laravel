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

    <div class="row">
        <div class="col-4">
            <img src="{{asset('assets/imagenes/transportistas')}}/{{$transportista->imagen}}">
        </div>

        <div class="col-6">
            <h1>{{$transportista->nombre}} {{$transportista->apellidos}}</h1>
            <p>Años de premiso de circulacion {{$transportista->fechaPermisoConducir}}</p>
            <p>Empresas</p>
            <ul>
                @foreach($transportista->empresas as $empresa)
                    <li>{{$empresa->nombre}}</li>
                @endforeach
            </ul>
        </div>

        @if($transportista->paquetes->count() > 0)
            <div class="col-12">
                <p>Paquetes</p>
                <ul>
                    @foreach($transportista->paquetes as $paquete)
                        <li>Paquete {{$paquete->id}} - {{$paquete->direccionEntrega}}: @if($paquete->entregado) entregado @else pendiente de entrega @endif</li>
                    @endforeach
                </ul>

                <button class="btn btn-primary" type="button"><a href="{{route('transportista.entregar', $transportista)}}" class="text-light">Entregar todo</a></button>
                <button class="btn btn-primary" type="button"><a href="{{route('transportista.noEntregar', $transportista)}}" class="text-light">Marcar todo como no entregado</a></button>

            </div>
        @endif
    </div>
@endsection
