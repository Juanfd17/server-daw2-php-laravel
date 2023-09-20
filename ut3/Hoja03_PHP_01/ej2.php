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

$numero = 46364;
echo comprobarCapicua($numero) ? "es capicua": "no es capicua";
function comprobarCapicua($numero) {
    $numeroReves = 0;
    $numeroOriginal = $numero;

    while ($numero != 0) {
        $numeroReves += $numero % 10;
        $numeroReves *= 10;
        $numero = (int)($numero / 10);
    }

    return $numeroOriginal == $numeroReves / 10;
}
?>
