<?php

class Pelicula {
    private $nombre;
    private $portada;

    public function __construct($nombre, $portada) {
        $this->nombre = $nombre;
        $this->portada = $portada;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPortada() {
        return $this->portada;
    }
}