@extends('layouts.master')
@section('titulo')
    Museo
@endsection
@section('contenido')

<div class="row">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Añadir nuevo cuadro
            </div>
            <form action="{{route('cuadros.store')}}" method="post" enctype="multipart/form-data" class="card-body" style="padding:30px">
                @csrf
                {{-- TODO: Abrir el formulario e indicar el método POST --}}
                {{-- TODO: Protección contra CSRF --}}
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                @php $pintores = \App\Models\Pintor::all() @endphp

                <div class="mb-3">
                    <label>Pintor</label>
                    <select name="pintor">
                        @foreach($pintores as $pintor)
                            <option value="{{$pintor->id}}">{{$pintor->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="img">Imagen</label>
                    <input type="file" name="img" id="img" class="form-control" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                        Añadir cuadro
                    </button>
                </div>
                {{-- TODO: Cerrar formulario --}}
            </form>
        </div>
    </div>
</div>
@endsection
