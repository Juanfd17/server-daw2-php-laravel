<?php
require_once("Actor.class.php");
class Pelicula {
    private $nombre;
    private $portada;
    private $actores;
    public function __construct($nombre, $portada, $actores) {
        $this->nombre = $nombre;
        $this->portada = $portada;
        $this->actores = $actores;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPortada() {
        return $this->portada;
    }

    public function getActores() {
        return $this->actores;
    }
}