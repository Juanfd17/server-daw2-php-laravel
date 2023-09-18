<?php
    $fecha = new DateTime(date("Y-m-d H:i:s"));
    echo $fecha->format("Y-m-d H");
    $numeroHoras = 2;
    $fecha->modify("+$numeroHoras Hour");
    echo "<br>".$fecha->format("Y-m-d H");
?>