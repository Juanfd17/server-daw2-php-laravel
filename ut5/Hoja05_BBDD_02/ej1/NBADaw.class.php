<?php
require_once ("Equipo.class.php");
require_once ("Jugador.class.php");
require_once ("Conexion.class.php");
class NBADaw {
    public static function getEquipos() {
        $conexion = Conexion::getInstancia()->getConexion();
        $consulta = "select * from equipos";
        $resultado = $conexion->query($consulta);
        $equipos = [];
        while ($registro = $resultado->fetch()) {
            array_push($equipos, new Equipo($registro['nombre'], $registro['ciudad'] , $registro['conferencia'], $registro['division']));
        }

        return $equipos;
    }

    public static function getNombreEquipos(){
        $equipos = NBADaw::getEquipos();
        $nombres = [];

        foreach ($equipos as $equipo) {
            array_push($nombres, $equipo->getNombre());
        }

        return $nombres;
    }

    public static function getJugadores() {
        $conexion = Conexion::getInstancia()->getConexion();
        $consulta = "select * from jugadores";
        $resultado = $conexion->query($consulta);
        $jugadores = [];
        while ($registro = $resultado->fetch()) {
            array_push($jugadores, new Jugador($registro['codigo'], $registro['nombre'], $registro['procedencia'], $registro['altura'], $registro['peso'], $registro['posicion'], $registro['nombre_equipo']));
        }

        return $jugadores;
    }

    public static function getJugadoresEquipo($equipo){
        $jugadores = NBADaw::getJugadores();
        $jugadoresEquipo = [];

        foreach ($jugadores as $jugador){
            if ($jugador->getNombreEquipo() === $equipo){
                array_push($jugadoresEquipo, $jugador);
            }
        }

        return $jugadoresEquipo;
    }

}