@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Lista de transportistas</h1>

    <div class="row bg-secondary g-2 p-3">
        @foreach( $transportistas as $tranpostista )
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="p-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('assets/imagenes/transportistas')}}/{{$tranpostista->imagen}}">
                        </div>
                        <h1><a href="{{ route('transportistas.show', $tranpostista) }}">{{$tranpostista->nombre}}</a></h1>
                        @php $paquetesPendientes = 0 @endphp
                        @foreach($tranpostista->paquetes as $paquete)
                            @if(!$paquete->entregado)
                                @php $paquetesPendientes++ @endphp
                            @endif
                        @endforeach
                        <p>{{$paquetesPendientes}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
