<?php
    require_once("CuentaAhorro.class.php");
    require_once ("CuentaCorriente.class.php");
    $cuentaCorriente = new CuentaCorriente(123, "pepe",400, 20);
    echo $cuentaCorriente;
    $cuentaCorriente->ingreso(2);
    echo ($cuentaCorriente->esPreferencial(403)) ? "true": "false";
    echo $cuentaCorriente;
    $cuentaCorriente->reintegro(392);
    echo $cuentaCorriente;
    $cuentaCorriente->reintegro(1);
    echo $cuentaCorriente;

    $cuentaAhorro = new CuentaAhorro(124, "lola", 300, 30, 2);
    echo $cuentaAhorro;
    $cuentaAhorro->aplicaInteres();
    echo $cuentaAhorro;
?>