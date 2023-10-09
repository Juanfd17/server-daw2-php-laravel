<?php

namespace ej3;

abstract class Producto {
    private $codigo;
    private $precio;
    private $nombre;

    public function __construct($codigo, $precio, $nombre) {
        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function __toString(): string {
        return "Codigo: ".$this->codigo." Precio: ".$this->precio." Nombre: ".$this->precio;
    }


}