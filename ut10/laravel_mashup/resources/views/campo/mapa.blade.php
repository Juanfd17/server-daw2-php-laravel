<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo OpenStreetMap</title>
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-
p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-
20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        .leaflet-container {
            height: 100%;
        }
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .mapaIMG {
            width: 60%;
            float: left;
        }

        .imagenes {
            width: 40%;
            float: right;
        }
    </style>
</head>
<body>
<div id="map"></div>
<div id="imagenes"></div>
<script>
    var tamanioIcono = 26
    var icono = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/544/544389.png',

        iconSize:     [tamanioIcono, tamanioIcono], // size of the icon
        iconAnchor:   [tamanioIcono, tamanioIcono], // point of the icon which will correspond to marker's location
    });

    const map = L.map('map').setView([40, -3.7], 6);
    const tiles = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        attribution: '&copy; <href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    @foreach( $campos as $campo )
        addMarket({{$campo->latitud}}, {{$campo->longitud}}, "{{$campo->nombre}}", "{{$campo->equipo}}")
    @endforeach

    function addMarket(latitud, longitud, nombre, equipo) {
        const marker = L.marker([latitud, longitud], {icon: icono}).addTo(map).bindPopup(`<b>${nombre}</b>`);
        marker.on('click', function(e) {
            getTiempo(latitud, longitud, this)
            obtenerImagenesFlickr(latitud, longitud, nombre, equipo)
            this.openPopup();
            map.setView([latitud, longitud], 17)
        });
    }

    map.on("contextmenu", (e) =>{
        map.setView([40, -3.7], 6)
        map.closePopup();
        document.getElementById('imagenes').innerHTML = ""
        quitarFotos()
    })

    function getTiempo(latitud, longitud, marcador) {
        const requestOptions = {
            method: "GET",
            redirect: "follow"
        };

        fetch(`http://127.0.0.1:8000/api/get-tiempo/${latitud}/${longitud}`, requestOptions)
            .then((response) => response.json())
            .then((result) => {
                console.log(result)
                marcador.bindPopup(`<p>${result.ciudad}</p> <img src=https://openweathermap.org/img/wn/${result.icono}@2x.png> <p>Temperatura: ${result.temperatura}º</p> <p>Tiempo: ${result.cielo}</p>`)
            })
            .catch((error) => console.error(error));
    }

    function obtenerImagenesFlickr(latitud, longitud, nombre, equipo) {
        nombre += " " + equipo
        console.log(nombre)
        const claveAPIFlickr = '48b76c45920773ed6405a942901d8b3a'
        const urlFlickr = `https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=${claveAPIFlickr}&text=${nombre}&lat=${latitud}&lon=${longitud}&per_page=10&format=json&nojsoncallback=1`

        fetch(urlFlickr)
            .then(respuesta => respuesta.json())
            .then(datos => {
                if (datos.photos) {
                    let imgs = document.querySelector("#imagenes")
                    imgs.innerHTML = ""
                    mostrarFotos()
                    datos.photos.photo.forEach(foto => {
                        const urlImagen = `https://farm${foto.farm}.staticflickr.com/${foto.server}/${foto.id}_${foto.secret}.jpg`
                        let img = document.createElement("img")
                        img.src = urlImagen

                        imgs.append(img)
                    })
                }
            })
            .catch(error => console.error(error))
    }

    function mostrarFotos() {
        let mapa = document.querySelector("#map")
        mapa.className = "leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom mapaIMG"

        let imagenes = document.querySelector("#imagenes")
        imagenes.className = "iamgenes"
    }

    function quitarFotos() {
        let mapa = document.querySelector("#map")
        mapa.className = "leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"

        let imagenes = document.querySelector("#imagenes")
        imagenes.className = ""
    }

</script>
</body>
</html>
