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
        $texto .= "<tr>";
        foreach ($this->equipos as $equipo){
            $texto .= "<td>".$equipo->getNombre()."<tr>";
            $texto .= $equipo->imprimirJugadores();
            $texto .= "</tr></td>";
        }
        $texto .= "</tr>";


        return $texto;
    }

    public function todosEntrenadores(){
        $texto = "";
        $texto .= "<tr>";
        foreach ($this->equipos as $equipo){
            $texto .= "<td>".$equipo->getNombre()."<tr>";
            $texto .= $equipo->imprimirEntrenador();
            $texto .= "</tr></td>";
        }
        $texto .= "</tr>";


        return $texto;
    }
}