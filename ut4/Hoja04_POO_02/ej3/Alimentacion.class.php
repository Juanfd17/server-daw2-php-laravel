<?php

namespace ej3;
require_once("Producto.class.php");
class Alimentacion extends Producto {
    private $fechaCaducidad;

    public function __construct($fechaCaducidad, $codigo, $precio, $nombre) {
        parent::__construct($codigo, $precio, $nombre);
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function getFechaCaducidad() {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad($fechaCaducidad): void {
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function __toString(): string {
        return parent::__toString()." Fecha caducidad: ".$this->fechaCaducidad;
    }


}