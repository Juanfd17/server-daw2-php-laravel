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


           @php
           /*
            @foreach($animal->revisiones as $revision)
                <p>Revision del {{$revision["fechaRevision"]}}: descripcion: {{$revision["descripcion"]}}</p>
            @endforeach
            */
           @endphp

            <h1>Reviones:</h1>
            <button class="btn btn-secondary" type="button" id="cargarRevision">Cargar Revision</button>

            <div id="revisiones">

            </div>

            <div class="d-none" id="noMas">
                <h1>No hay mas revisiones</h1>
            </div>

            <script>
                let botonRevision = document.querySelector("#cargarRevision")
                let divRevisiones = document.querySelector("#revisiones")

                let pagina = 1;
                let siguinete = true

                botonRevision.addEventListener("click", async () => {
                    if (siguinete){
                        let revision = await cargarRevision({{$animal->id}}, pagina)

                        console.log(revision)
                        pagina ++;

                        let divRevision = document.createElement("div")
                        divRevision.innerText = `${revision.data[0].fechaRevision}: ${revision.data[0].descripcion}`

                        divRevisiones.append(divRevision)

                        siguinete = (revision.links.next !== null)
                    } else {
                        document.querySelector("#noMas").className = ""
                    }
                })

                async function cargarRevision(idAnimal, pagina) {
                    const response = await fetch(`http://127.0.0.1:8000/api/animales/cargarRevisiones/${idAnimal}?page=${pagina}`);
                    const data = await response.json();

                    return data
                }
            </script>


            @if (count($animal->cuidadores)>0)
                <li>Cuidadores:
                    <ul>
                        @foreach ($animal->cuidadores as $cuidador)
                            <li>{{$cuidador->nombre}}</li>
                        @endforeach
                    </ul>
                </li>
            @endif
        </div>
    </div>

    <button class="btn btn-primary" type="button"><a href="{{route('animales.duplicarPeso', $animal)}}" class="text-light">Duplicar Peso</a></button>
    <button class="btn btn-primary" type="button"><a href="{{route('animales.edit',$animal)}}" class="text-light">Editar</a></button>
    <button class="btn btn-primary" type="button"><a href="{{route('revisiones.create',$animal)}}" class="text-light">Añadir revision</a></button>
    <button class="btn btn-primary" type="button"><a href="{{route('animales.index')}}" class="text-light">Volver al listado</a></button>
@endsection
