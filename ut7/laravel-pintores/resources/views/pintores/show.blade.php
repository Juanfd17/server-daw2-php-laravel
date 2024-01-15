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
                <p>{{$cuadro->nombre}}</p>
                <img src="{{$cuadro->imagen}}">
            </div>

        @endforeach
    </div>
@endsection
