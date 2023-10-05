<?php
require_once ("./Cuenta.class.php");
class CuentaCorriente extends Cuenta{
    private $cuotaMantenimiento;

    public function __construct($numero, $titular, $saldo, $cuotaMantenimiento){
        parent::__construct($numero, $titular, $saldo);
        $this->cuotaMantenimiento = $cuotaMantenimiento;
    }

    public function reintegro($cantidad){
        if (parent::getSaldo() > 20){
            parent::reintegro($cantidad);
        }
    }

    public function __toString(){
        return parent::__toString()." y la cuota de mantenimiento es de $this->cuotaMantenimiento €</p>";
    }

}