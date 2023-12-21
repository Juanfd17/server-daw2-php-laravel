@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Lista de Animales</h1>

    <div class="row bg-secondary g-2 p-3">
        @foreach( $animales as $animal )
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="bg-dark p-3">
                    <a class="row justify-content-center" href="{{ route('animales.show' , $animal) }}">
                        <img src="{{asset('assets/img/animales')}}/{{$animal->imagen}}" style="height:200px; width:200px;"/>
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            {{$animal->especie}}
                        </h4>
                        <p>Edad: {{$animal->getEdad()}}</p>
                        <p>nuemero de revisiones: {{$animal->cuantasRevisiones()}}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
