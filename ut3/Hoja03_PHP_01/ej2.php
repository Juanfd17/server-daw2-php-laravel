<?php
    $numero = 121;
    $numero = strval($numero);
    $longitud = strlen($numero);

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($numero[$i] != $numero[$longitud - $i - 1]) {
            echo "no es capicua";
            break;
        }
    }

    echo "es capicua";
?>
