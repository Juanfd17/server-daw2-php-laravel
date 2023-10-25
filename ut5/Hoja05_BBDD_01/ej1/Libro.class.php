<?php

class Libro {
    private $numero_ejemplar;
    private $titulo;
    private $anyo_edicion;
    private $precio;
    private $fecha_adquisicion;

    public function __construct($titulo, $anyo_edicion, $precio, $fecha_adquisicion) {
        $this->numero_ejemplar = 0;
        $this->titulo = $titulo;
        $this->anyo_edicion = $anyo_edicion;
        $this->precio = $precio;
        $this->fecha_adquisicion = $fecha_adquisicion;
    }

    public function getNumeroEjemplar() {
        return $this->numero_ejemplar;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAnyoEdicion() {
        return $this->anyo_edicion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getFechaAdquisicion() {
        return $this->fecha_adquisicion;
    }

    public function setNumeroEjemplar($numero_ejemplar): void {
        $this->numero_ejemplar = $numero_ejemplar;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAnyoEdicion($anyo_edicion): void {
        $this->anyo_edicion = $anyo_edicion;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function setFechaAdquisicion($fecha_adquisicion): void {
        $this->fecha_adquisicion = $fecha_adquisicion;
    }
}