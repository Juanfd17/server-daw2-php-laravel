<?php
    $numero = $_POST["numero"];
    echo "<h1>Tabla de multiplicar del $numero:</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$i X $numero = ".$i * $numero. "</p><br>";
    }
    echo "<a href='ej4.html'>Volver</a>"
?>