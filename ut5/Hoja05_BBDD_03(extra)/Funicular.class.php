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
        $ok = true;

        $conexion = Conexion::getInstancia()->getConexion();
        $conexion->beginTransaction();

        $consulta = "UPDATE `plazas` SET `reservada` = '1' WHERE (`numero` = ?);";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $nplaza);

        $stmt->execute();

        if (!$stmt->rowCount() > 0){
            $ok = false;
        }

        $consulta = "INSERT INTO `pasajeros` (`dni`, `nombre`, `sexo`, `numero_plaza`) VALUES (?, ?, '-', ?);";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $dni);
        $stmt->bindParam(2, $nombre);
        $stmt->bindParam(3, $nplaza);

        $stmt->execute();

        if (!$stmt->rowCount() > 0){
            $ok = false;
        }

        if ($ok){
            $conexion->commit();
        }
        else{
            $conexion->rollback();
            throw new Exception("Asiento ocupado");
        }

        return $ok;
    }

    public static function actualizarPrecio($precios, $plazas){
        $ok = true;

        $conexion = Conexion::getInstancia()->getConexion();
        $conexion->beginTransaction();

        //meter for
        $consulta = "UPDATE plazas SET precio = ? WHERE numero = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $precio);
        $stmt->bindParam(2, $nPlaza);

        $stmt->execute();

        //acabar for

        if (!$stmt->rowCount() > 0){
            //$ok = false;
        }

        if ($ok){
            $conexion->commit();
        }
        else{
            $conexion->rollback();
            throw new Exception("Algo ha ido mal");
        }

        return $ok;
    }
}