<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $operacion = $_POST["operaccion"];
    echo "<h1>Operacion $n1 $operacion $n2</h1>";
    switch ($operacion){
        case "suma":
            echo $n1 + $n2;
            break;
        case "resta":
            echo $n1 - $n2;
            break;
        case "producto":
            echo $n1 * $n2;
            break;
        case "cociente":
            echo $n1 / $n2;
            break;
    }

    echo "<br><a href='ej6.html'>Volver</a>"
?>