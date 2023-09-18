<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <?php
        $nombre = "Juan";

        echo "informacion de la variable \"nombre\": ";
        var_dump($nombre);
        echo "<br> contenido de la varioble: $nombre";
        $nombre = null;
        echo "<br>despues de asignarle un valor nulo: ".gettype($nombre);
    ?>
</body>
</html>