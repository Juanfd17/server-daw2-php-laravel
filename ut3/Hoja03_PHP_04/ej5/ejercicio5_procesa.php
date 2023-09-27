<?php
    $nMayor = $_POST["nMayor"];
    $nMenor = $_POST["nMenor"];
    $repeticiones = $nMayor - $nMenor;

    echo "<h1>LSITA DE PARES DE NÚMEOS DE $nMenor Y $nMayor</h1><br>";

    for ($i = 0; $i <= $repeticiones; $i++) {
         echo "($nMenor,$nMayor)";
         $nMayor--;
         $nMenor++;
    }

    echo "<br><a href='ej5.html'>Volver</a>";
?>