<?php
    /*$numero = 12121;
    $numero = strval($numero);
    $longitud = strlen($numero);

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($numero[$i] != $numero[$longitud - $i - 1]) {
            echo "no es capicua";
            break;
        }
    }

    echo "es capicua";
    */

    $numero = 4664;
    $numeroRebes = 0;
    $numeroOriginal = $numero;

    while ($numero != 0) {
        $numeroRebes += $numero % 10;
        $numeroRebes *= 10;
        $numero = (int)($numero / 10);
    }

    if ($numeroOriginal == $numeroRebes / 10) {
        echo "es capicua";
    } else {
        echo "no es capicua";
    }

?>
