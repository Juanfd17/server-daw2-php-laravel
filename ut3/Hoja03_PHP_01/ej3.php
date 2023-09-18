<?php
    for ($i = 100; $i <= 999; $i++) {
        if (esCapicua($i)) {
            echo $i . "<br>";
        }
    }

    function esCapicua($numero) {
        $numero = strval($numero);
        $longitud = strlen($numero);

        for ($i = 0; $i < $longitud / 2; $i++) {
            if ($numero[$i] != $numero[$longitud -$i - 1]) {
                return false;
            }
        }

        return true;
    }
?>