@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Crear revision</h1>

    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir revision para {{$animal->especie}}
                </div>
                <form class="card-body" style="padding:30px">
                    <div class="mb-3">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fechaN" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                            Añadir revision
                        </button>
                    </div>
                    {{-- TODO: Cerrar formulario --}}
                </form>
            </div>
        </div>
    </div>
@endsection
