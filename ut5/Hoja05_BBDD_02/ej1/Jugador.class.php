<?php
class Jugador {
    private $codigo;
    private $nombre;
    private $procedencia;
    private $altura;
    private $peso;
    private $posicion;
    private $nombre_equipo;

    public function __construct($codigo, $nombre, $procedencia, $altura, $peso, $posicion, $nombre_equipo) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->procedencia = $procedencia;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->posicion = $posicion;
        $this->nombre_equipo = $nombre_equipo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getProcedencia() {
        return $this->procedencia;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getPosicion() {
        return $this->posicion;
    }

    public function getNombreEquipo() {
        return $this->nombre_equipo;
    }


}