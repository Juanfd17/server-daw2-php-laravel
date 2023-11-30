<?php
class Venta{
    private $idCliente;
    private $idComercio;
    private $fecha;
    private $importe;
    private $codigo;

    public function __construct($idCliente, $idComercio, $fecha, $importe, $codigo){
        $this->idCliente = $idCliente;
        $this->idComercio = $idComercio;
        $this->fecha = $fecha;
        $this->importe = $importe;
        $this->codigo = $codigo;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function getIdComercio(){
        return $this->idComercio;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getImporte(){
        return $this->importe;
    }

    public function getCodigo(){
        return $this->codigo;
    }
}