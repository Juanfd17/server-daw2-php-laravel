<?php

require_once('entrenador.php');
require_once('jugador.php');
class equipo{
    private $rutaIMG;
    private $entrenador;
    private $jugadoresEquipo = [];

    public function __construct($entrenador, array $jugadores){
        $this->entrenador = new entrenador($entrenador, $this->rutaIMG.$entrenador."jpeg");

        foreach ($jugadores as $jugador){
            $jugadoresEquipo += new jugador($jugador, $this->rutaIMG . $jugador . "jpeg");
        }
    }

    public function getEntrenador(){
        return $this->entrenador;
    }

    public function getJugadoresEquipo(): array{
        return $this->jugadoresEquipo;
    }
}