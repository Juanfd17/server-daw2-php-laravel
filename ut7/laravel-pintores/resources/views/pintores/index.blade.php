@extends('layouts.master')
@section('titulo')
    Museo
@endsection
@section('contenido')
    <h1>Lista de Pintores</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Pais</th>
                <th scope="col">Cuadros</th>
            </tr>
        </thead>

        <tbody>
            @php $bgRojo = false @endphp
            @foreach( $pintores as $pintor )
                @if($bgRojo)
                    <tr class="table-danger">
                    @php $bgRojo = false @endphp
                @else
                    <tr class="table-light">
                    @php $bgRojo = true @endphp
                @endif
                <td><a href="{{ route('pintores.show' , $pintor) }}">{{$pintor->nombre}}</a></td>
                <td>{{$pintor->pais}}</td>
                <td>{{$pintor->cuadros->count()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
