<?php
require_once ("Cuenta.class.php");
class CuentaAhorro extends Cuenta {
    private $comisionApertura;
    private $interes;

    public function __construct($numero, $titular, $saldo, $comisionApertura, $interes){
        parent::__construct($numero, $titular, $saldo);
        $this->comisionApertura = $comisionApertura;
        $this->interes = $interes;
        $this->setSaldo($this->getSaldo() - $this->comisionApertura);
    }

    public function aplicaInteres(){
        parent::ingreso(parent::getSaldo() * ($this->interes / 100));
    }

    public function __toString(){
        return parent::__toString()." la comision de apertura es de $this->comisionApertura y los intereses son del $this->interes%</p>";
    }
}