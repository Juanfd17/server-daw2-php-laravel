<?php
/*Dada una cadena formada por una fecha. Valida si es correcta.*/
    $fecha = "28/2/2012";
    validarFecha($fecha);

    function validarFecha($fecha){
        $fecha = explode("/", $fecha);
        $dia = $fecha[0];
        $mes = $fecha[1];
        $anio = $fecha[2];

        switch ($mes) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                if ($dia > 31) {
                    echo "Fecha incorrecta";
                } else {
                    echo "Fecha correcta";
                }
                break;

            case 4: case 6: case 9: case 11:
                if ($dia > 30) {
                    echo "Fecha incorrecta";
                } else {
                    echo "Fecha correcta";
                }
                break;

            case 2:
                if (esBisiesto($anio)) {
                    if ($dia > 29) {
                        echo "Fecha incorrecta";
                    } else {
                        echo "Fecha correcta";
                    }
                } else if ($dia > 28) {
                    echo "Fecha incorrecta";
                } else {
                    echo "Fecha correcta";
                }
                break;

        }
    }

    function esBisiesto($anio){
        return ($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0;
    }
?>