@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    @if(session('mensaje'))
        <div class="alert alert-info">
            {{session('mensaje')}}
        </div>
    @endif
    <h1>{{$pintor->nombre}}</h1>
    <div class="row">
        <div class="col-12">
            <p>pais: {{$pintor->pais}}</p>
            <p>Cuadros</p>

            @foreach($pintor->cuadros as $cuadro)
                <p></p>
            @endforeach
        </div>
    </div>


@endsection
