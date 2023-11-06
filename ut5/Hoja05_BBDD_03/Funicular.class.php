<?php
require_once ("Conexion.class.php");
class Funicular {
    public static function llegada() {
        $ok = true;
        $conexion = Conexion::getInstancia()->getConexion();
        $conexion->beginTransaction();

        $consulta = "DELETE FROM `pasajeros`";
        $stmt = $conexion->prepare($consulta);
        $stmt->execute();

        $consulta = "UPDATE `plazas` SET `reservada` = '0'";
        $stmt = $conexion->prepare($consulta);
        $stmt->execute();

        $ok = $stmt->rowCount() > 0;

        if ($ok){
            $conexion->commit();
        }
        else{
            $conexion->rollback();
        }

        return $ok;
    }

    public static function getplazas(){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM dwes_03_funicular.plazas;";
        $stmt = $conexion->prepare($consulta);

        if ($stmt->execute()) {
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } else {
            return false;
        }
    }

    public static function getplazasLibres(){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM dwes_03_funicular.plazas where reservada = 0;";
        $stmt = $conexion->prepare($consulta);

        if ($stmt->execute()) {
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } else {
            return false;
        }
    }

    public static function reservar($dni, $nombre, $nplaza){
        $conexion = Conexion::getInstancia()->getConexion();
        $conexion->beginTransaction();

        $consulta = "UPDATE `plazas` SET `reservada` = '1' WHERE (`numero` = ?);";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $nplaza);

        $stmt->execute();

        $consulta = "INSERT INTO `pasajeros` (`dni`, `nombre`, `sexo`, `numero_plaza`) VALUES (?, ?, '-', ?);";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $dni);
        $stmt->bindParam(2, $nombre);
        $stmt->bindParam(3, $nplaza);

        $stmt->execute();
    }
}