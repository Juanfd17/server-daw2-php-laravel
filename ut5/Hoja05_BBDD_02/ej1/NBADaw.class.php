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



    public static function actualizarPesoJugador($codigo, $peso){
        $conexion = Conexion::getInstancia()->getConexion();
        $consulta = "UPDATE `dwes_02_nba`.`jugadores` SET `peso` = ? WHERE (`codigo` = ?);";
        $stmt = $conexion->prepare($consulta);

        $stmt->bindValue(1, $peso);
        $stmt->bindValue(2, $codigo);

        $stmt->execute();
    }

    public static function addJugador(Jugador $jugador){
        $jugadores = NBADaw::getJugadores();
        $codigo = 0;

        foreach ($jugadores as $jugadorB){
            if ($jugadorB->getCodigo() > $codigo){
                $codigo = $jugadorB->getCodigo();
            }
        }

        $conexion = Conexion::getInstancia()->getConexion();
        $consulta = "INSERT INTO `dwes_02_nba`.`jugadores` (`codigo`, `nombre`, `procedencia`, `altura`, `peso`, `posicion`, `nombre_equipo`) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = $conexion->prepare($consulta);

        $stmt->bindValue(1, ($codigo + 1));
        $stmt->bindValue(2, $jugador->getNombre());
        $stmt->bindValue(3, $jugador->getProcedencia());
        $stmt->bindValue(4, intval($jugador->getAltura()));
        $stmt->bindValue(5, intval($jugador->getPeso()));
        $stmt->bindValue(6, $jugador->getPosicion());
        $stmt->bindValue(7, $jugador->getNombreEquipo());

        $stmt->execute();
    }

    public static function borrarJugador($codigo){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "DELETE FROM `dwes_02_nba`.`estadisticas` WHERE (`jugador` = ?);";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindValue(1, $codigo);

        $stmt->execute();

        $consulta2 = "DELETE FROM `dwes_02_nba`.`jugadores` WHERE (`codigo` = ?);";
        $stmt = $conexion->prepare($consulta2);

        $stmt->bindValue(1, $codigo);

        $stmt->execute();


    }
}