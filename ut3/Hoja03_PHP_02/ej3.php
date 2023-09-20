<?php
/*Dado un número, definir un conjunto de funciones para hacer una serie de comprobaciones
como: decir si es capicúa, para redondearle, decir el número de dígitos que tiene. Todos los
resultados se muestran en el proceso principal.*/

    function esCapicua($numero) {
        $numeroReves = 0;
        $numeroOriginal = $numero;

        while ($numero != 0) {
            $numeroReves += $numero % 10;
            $numeroReves *= 10;
            $numero = (int)($numero / 10);
        }

        return $numeroOriginal == $numeroReves / 10;
    }

    function redondear($numero){
        $ultimoDigito = $numero % 10;
        if ($ultimoDigito >= 5){
            $numero += 10 - $ultimoDigito;
        } else{
            $numero -= $ultimoDigito;
        }

        return $numero;
    }

    function cuantosDigitos($numero){
        $numeroDigitos = -1;
        while ($numero != 0){
            $numeroDigitos++;
            $numero = (int) $numero / 10;
        }

        return $numeroDigitos;
    }

    echo "Capicua: ".((esCapicua(545)) ? "si": "no")."<br>";
    echo "Capicua: ".((esCapicua(543)) ? "si": "no")."<br>";

    echo "Redondear: ".redondear(56)."<br>";
    echo "Redondear: ".redondear(54)."<br>";

    echo "Cuantos Digitos: ".cuantosDigitos(456)."<br>";
    echo "Cuantos Digitos: ".cuantosDigitos(456232)."<br>";
?>