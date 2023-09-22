<?php
/*Dada una cuenta corriente determina si es correcta. La CC tiene que tener el formato (entidadoficina-dígitos de control-cuenta).
• Mostrar el código de la entidad.
• Mostrar el código de la oficina.
• Mostrar el número de la cuenta (solamente el número de cuenta, sin entidad, oficina ni
dígitos de control).
• Mostrar los dígitos de control de la cuenta.
• Comprobar que el código de control es correcto, para ello, se deben generar y comparar
(buscar la función de generación del dígito de control)*/

    echo "IBAN 1 <br>";
    comprobarIBAN("ES84-3059-0066-63-2995519812");
    echo "<br> IBAN 2 <br>";
    comprobarIBAN("ES35-2103-7044-91-0010017931");
    function comprobarIBAN($cuenta){
        $cuenta= explode("-", $cuenta);

        $coPais = ($cuenta[0]);
        $coEntidad = $cuenta[1];
        $coOficina = $cuenta[2];
        $coControl = $cuenta[3];
        $coCuenta = $cuenta[4];

        monstrar($coEntidad);
        monstrar($coOficina);
        monstrar($coCuenta);
        monstrar($coControl);

        comprobarCoControl($coControl,$coEntidad, $coOficina, $coCuenta);
    }

    function monstrar($mensaje){
        echo $mensaje."<br>";
    }

    function comprobarCoControl($control,$coEntidad, $coOficina, $cuenta){
        $controlCalculado = calcularDigitoControl($coEntidad.$coOficina, array(6,3,7,9,10,5,8,4));
        $controlCalculado *= 10;
        $controlCalculado += calcularDigitoControl($cuenta, array(6,3,7,9,10,5,8,4,2,1));


        echo ($controlCalculado == $control) ? "Correcto" : "Incorrecto".$controlCalculado;
    }

    function calcularDigitoControl($numero, $multiplicaciones){
        $suma = 0;
        settype($numero, "integer");

        for ($i = 0; $i < count($multiplicaciones); $i++) {
            $suma += ($numero % 10) * $multiplicaciones[$i];
            $numero = (int)($numero / 10);
        }

        $suma = 11 - ($suma % 11);
        if ($suma == 10) {
            $suma = 1;
        } else if ($suma == 11) {
            $suma = 0;
        }
        return $suma;
    }
?>