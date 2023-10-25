<?php

class Equipo {
    private $nombre;
    private $ciudad;
    private $conferencia;
    private $division;

    public function __construct($nombre, $ciudad, $conferencia, $division) {
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->conferencia = $conferencia;
        $this->division = $division;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getConferencia() {
        return $this->conferencia;
    }

    public function getDivision() {
        return $this->division;
    }


}