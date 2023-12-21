@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>{{$animal->especie}}</h1>
    <div class="row">
        <div class="col-3" style="background-image: url('{{asset('assets/img/animales')}}/{{$animal->imagen}}'); background-size: contain; background-repeat: no-repeat;">
        </div>

        <div class="col-9">
            <p>{{$animal->descripcion}}</p>
            <p>Peso: {{$animal->peso}} Kg</p>
            <p>Altura: {{$animal->altura}} Cm</p>
            <p>Alimentacion: {{$animal->alimentacion}}</p>
            <p>Edad: {{$animal->getEdad()}} años</p>

            @foreach($animal->revisiones as $revision)
                <p>Revision del {{$revision["fechaRevision"]}}: descripcion: {{$revision["descripcion"]}}</p>
            @endforeach
        </div>
    </div>

    <button class="btn btn-primary" type="button"><a href="{{route('animales.edit',$animal)}}" class="text-light">Editar</a></button>
    <button class="btn btn-primary" type="button"><a href="{{route('revisiones.create',$animal)}}" class="text-light">Añadir revision</a></button>
    <button class="btn btn-primary" type="button"><a href="{{route('animales.index')}}" class="text-light">Volver al listado</a></button>
@endsection
