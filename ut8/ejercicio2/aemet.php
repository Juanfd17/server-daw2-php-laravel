<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
$curl = curl_init();
$codigoPostal = 33044;
$token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJqdWFuZmQxN0BlZHVjYXN0dXIuZXMiLCJqdGkiOiJmMThjMjA5My0xMzI2LTQyYzgtOGVjYi03MjBmNDg4NzJhYWUiLCJpc3MiOiJBRU1FVCIsImlhdCI6MTcwNTkyMDE5NywidXNlcklkIjoiZjE4YzIwOTMtMTMyNi00MmM4LThlY2ItNzIwZjQ4ODcyYWFlIiwicm9sZSI6IiJ9.DnfMoCHv9sHyTZ1PsiXlAfGaawLL9j8Wb4dWt3vsNOs";

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/diaria/$codigoPostal/?api_key=$token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$respuesta_decodificada = json_decode($response);

$datos = $respuesta_decodificada->datos;

//datos

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $datos,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

$objeto = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $response) );
$objeto = $objeto[0];


echo "<h1>El tiempo semanal en $objeto->nombre $objeto->provincia</h1>";
$dias = $objeto->prediccion->dia;

foreach ($dias as $dia){
    setlocale(LC_TIME, 'Spanish_Spain.1252');
    $fecha = $dia->fecha;
    $fecha = new DateTime($fecha);
    $formattedFecha = strftime('%A, %d de %B de %Y', $fecha->getTimestamp());


    ?>

    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo $formattedFecha; ?></div>
        <div class="card-body">
            <h5 class="card-title">Temperatura maxima: <?php echo $dia->temperatura->maxima; ?>º</h5>
            <h5 class="card-title">Temperatura minima: <?php echo $dia->temperatura->minima; ?>º</h5>
            <p class="card-text">Probabilidad de precipitacion: <?php echo $dia->probPrecipitacion[0]->value; ?>%</p>
            <p class="card-text">Cota de nieve: <?php echo $dia->cotaNieveProv[0]->value; ?>m</p>
            <p class="card-text">Velocidad del viento: <?php echo $dia->viento[0]->velocidad; ?>%</p>
            <p class="card-text"><?php echo $dia->estadoCielo[0]->descripcion; ?></p>
        </div>
    </div>

    <?php
}

?>

</body>
</html>
