<?php
    for ($i = 100; $i <= 999; $i++) {
        $cadena = strval($i);
        $suma = 0;
        $multiplicacion = 1;
        for ($j = 0; $j < strlen($cadena); $j++) {
            $suma += (int)$cadena[$j];
            $multiplicacion *= (int)$cadena[$j];
        }

        if ($suma == $multiplicacion) {
            echo $i . "<br>";
        }
    }
?>
