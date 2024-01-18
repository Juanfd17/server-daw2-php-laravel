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
            <form action="{{route('paquetes.store')}}" method="post" enctype="multipart/form-data" class="card-body" style="padding:30px">
                @csrf
                {{-- TODO: Abrir el formulario e indicar el método POST --}}
                {{-- TODO: Protección contra CSRF --}}
                <div class="mb-3">
                    <label for="direccionEntrega">Direccion entrega del paquete</label>
                    <input type="text" name="direccionEntrega" id="direccionEntrega" class="form-control" required>
                </div>

                @php $transportistas = \App\Models\Transportista::all() @endphp

                <div class="mb-3">
                    <label>Pintor</label>
                    <select name="transportista_id">
                        @foreach($transportistas as $transportista)
                            <option value="{{$transportista->id}}">{{$transportista->nombre}}  {{$transportista->apellidos}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" id="imagen" class="form-control" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                        Añadir paquete
                    </button>
                </div>
                {{-- TODO: Cerrar formulario --}}
            </form>
        </div>
    </div>
</div>
@endsection
