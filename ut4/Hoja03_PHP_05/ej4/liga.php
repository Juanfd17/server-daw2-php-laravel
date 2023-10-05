<?php
require_once('equipo.php');
class liga{
    private $equipos = [];

    public function __construct(array $equipos){
        $this->equipos = $equipos;
    }

    public function getEquipos(): array{
        return $this->equipos;
    }

    public function addEquipo($equipo){
        $this->equipos += $equipo;
    }

    public function getEquipoNombre($nombre){
        foreach ($this->equipos as $equipo){
            if ($equipo->getNombre() == $nombre){
                return $equipo;
            }
        }
        return null;
    }

    public function todosJugadores(){
        $texto = "";


    }
}