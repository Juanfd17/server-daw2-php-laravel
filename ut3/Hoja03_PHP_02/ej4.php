<?php
/*Dada una cadena formada por una fecha. Valida si es correcta.*/
    $fecha = "31/3/2012";
    echo (validarFecha($fecha))? "Correcta" : "Incorrecta";
    validarFecha($fecha);

    function validarFecha($fecha){
        $fecha = explode("/", $fecha);
        $dia = $fecha[0];
        $mes = $fecha[1];
        $anio = $fecha[2];

        switch ($mes) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                return !($dia > 31);
                break;

            case 4: case 6: case 9: case 11:
                return !($dia > 30);
                break;

            case 2:
                if (esBisiesto($anio)) {
                    return !($dia > 29);
                } else {
                    return !($dia > 28);
                }
                break;

        }
    }

    function esBisiesto($anio){
        return ($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0;
    }
?>