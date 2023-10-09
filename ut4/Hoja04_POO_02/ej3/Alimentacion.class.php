<?php
require_once("Producto.class.php");
class Alimentacion extends Producto {
    private $mesCaducidad;
    private $anioCaducidad;

    public function __construct($mesCaducidad, $anioCaducidad, $codigo, $precio, $nombre) {
        parent::__construct($codigo, $precio, $nombre);
        $this->mesCaducidad = $mesCaducidad;
        $this->anioCaducidad = $anioCaducidad;
    }

    public function getFechaCaducidad() {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad($fechaCaducidad): void {
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function __toString(): string {
        return parent::__toString()." Mes caducidad: ".$this->mesCaducidad." Año caducidad: ".$this->anioCaducidad;
    }
}