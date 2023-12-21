@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Editar animal {{$animal['especie']}}</h1>

    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Editar animal
                </div>
                <form action="{{ route('animales.update', $animal) }}" method="post" enctype="multipart/form-data" class="card-body" style="padding:30px">
                    @csrf
                    @method('put')
                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    {{-- TODO: Protección contra CSRF --}}
                    <input type="hidden" name="slug" id="slug" class="form-control" value="{{$animal->slug}}">
                    <div class="mb-3">
                        <label for="especie">Especie</label>
                        <input type="text" name="especie" id="especie" class="form-control" value="{{$animal->especie}}" required>

                    </div>
                    <div class="mb-3">
                        <label for="peso">Peso</label>
                        <input type="number" name="peso" id="peso" class="form-control" value="{{$animal->peso}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="altura">Altura</label>
                        <input type="number" name="altura" id="altura" class="form-control" value="{{$animal->altura}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaN">Fecha nacimiento</label>
                        <input type="date" name="fechaN" id="fechaN" class="form-control" value="{{$animal->fechaNacimiento}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="alimentacion">Alimentacion</label>
                        <input type="text" name="alimentacion" id="alimentacion" class="form-control" value="{{$animal->alimentacion}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$animal->descripcion}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img">Imagen</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                            Editar animal
                        </button>
                    </div>
                    {{-- TODO: Cerrar formulario --}}
                </form>
            </div>
        </div>
    </div>
@endsection
