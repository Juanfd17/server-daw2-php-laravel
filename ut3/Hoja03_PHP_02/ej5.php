<?php
/*Dada una cuenta corriente determina si es correcta. La CC tiene que tener el formato (entidadoficina-dígitos de control-cuenta).
• Mostrar el código de la entidad.
• Mostrar el código de la oficina.
• Mostrar el número de la cuenta (solamente el número de cuenta, sin entidad, oficina ni
dígitos de control).
• Mostrar los dígitos de control de la cuenta.
• Comprobar que el código de control es correcto, para ello, se deben generar y comparar
(buscar la función de generación del dígito de control)*/

    $cuenta = "ES12-1234-5678-90-1234567890";
    function comprobarIBAN($cuenta){
        $cuenta= explode("-", $cuenta);

        $coPais = ($cuenta[0]);
        $coEntidad = ($cuenta[1]);
        $coOficina = ($cuenta[2]);
        $coControl = ($cuenta[3]);
        $coCuenta = ($cuenta[4]);

        monstrar($coEntidad);
        monstrar($coOficina);
        monstrar($coCuenta);
        monstrar($coControl);
    }

    function monstrar($mensaje){
        echo $mensaje."<br>";
    }

    function comprobarCoControl($control, $cuenta){

    }
?>