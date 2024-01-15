@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Lista de Pintores</h1>

    <div class="row bg-secondary g-2 p-3">
        @foreach( $pintores as $pintor )
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="bg-dark p-3">
                    <a class="row justify-content-center" href="{{ route('pintores.show' , $pintor) }}">
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            {{$pintor->nombre}}
                        </h4>
                        <p>N cuandros: {{$pintor->cuadros->count()}}</p>
                        <p>Pais: {{$pintor->pais}}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
