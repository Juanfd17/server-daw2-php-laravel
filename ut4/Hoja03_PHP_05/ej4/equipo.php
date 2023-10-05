<?php

require_once('entrenador.php');
require_once('jugador.php');
class equipo{
    private $nombre;
    private $rutaIMG;
    private $entrenador;
    private $jugadoresEquipo = [];

    public function __construct($nombre, $entrenador, $jugadores, $rutaIMG){
        $this->nombre = $nombre;

        $this->entrenador = new entrenador($entrenador, $rutaIMG."/entrenador/".$entrenador.".jpeg");

        foreach ($jugadores as $jugador){
            $this->jugadoresEquipo[] = new jugador($jugador, $rutaIMG."/jugadores/" . $jugador . ".jpeg");
        }
    }

    public function getEntrenador(){
        return $this->entrenador;
    }

    public function getJugadoresEquipo(){
        return $this->jugadoresEquipo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function imprimirJugadores(){
        $texto = "";
        foreach ($this->jugadoresEquipo as $jugador){
            $texto.= $jugador->__toString();
        }

        return $texto;
    }


}