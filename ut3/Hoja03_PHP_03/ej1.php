<?php
    pintarArray(ordenar(mezclar(cargar(20), cargar(20))));
    function cargar($nNumeros){
        for ($i = 0; $i < $nNumeros; $i++) {
            $numeros[] = random_int(0,100);
        }

        return $numeros;
    }

    function mezclar($array1, $array2){
        return array_merge($array1, $array2);
    }

    function ordenar($array){
        sort($array);
        return $array;
    }

    function pintarArray($array){
        foreach($array as $numero){
            echo($numero."<br>");
        }
    }
?>