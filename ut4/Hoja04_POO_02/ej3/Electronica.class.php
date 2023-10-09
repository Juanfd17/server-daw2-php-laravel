<?php
require_once("Producto.class.php");

class Electronica extends Producto {
    private $plazoGarantia;

    public function __construct($plazoGarantia, $codigo, $precio, $nombre) {
        parent::__construct($codigo, $precio, $nombre);
        $this->plazoGarantia = $plazoGarantia;
    }

    public function getPlazoGarantia() {
        return $this->plazoGarantia;
    }

    public function setPlazoGarantia($plazoGarantia): void {
        $this->plazoGarantia = $plazoGarantia;
    }

    public function __toString(): string {
        return parent::__toString(). " Plazo garantia: ".$this->plazoGarantia;
    }
}