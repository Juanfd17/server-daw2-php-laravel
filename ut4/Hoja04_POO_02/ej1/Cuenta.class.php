<?php

class Cuenta{
    private $numero;
    private $titular;
    private $saldo;

    public function __construct($numero, $titular, $saldo)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function setSaldo($saldo): void{
        $this->saldo = $saldo;
    }

    public function ingreso($cantidad){
        $this->setSaldo($this->saldo += $cantidad);
    }

    public function reintegro($cantidad){
        $this->setSaldo($this->saldo -= $cantidad);
    }

    public function esPreferencial($cantidad){
        return $this->saldo > $cantidad;
    }

    public function __toString(){
        return "<p>La cuenta: $this->numero tiene $this->saldo € y el tiular es $this->titular";
    }

    public function getSaldo(){
        return $this->saldo;
    }
}