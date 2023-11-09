<?php
require_once ("Conexion.class.php");
class Tienda {
    public static function codificar($contrasenia) {
        $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT);

        return $hashedPassword;
    }

    public static function comprobarContrasenia($contraseniaUsuario, $contraseniaCodificada){
        if (password_verify($contraseniaUsuario, $contraseniaCodificada)){
            return true;
        } else{
            throw new Exception("Contraseña incorrecta");
        }
    }

    public static function iniciarSesion($usuario, $contrasenia){
       if (self::comprobarContrasenia($contrasenia, self::getContraseniaUsuario($usuario))){
           return self::getId($usuario);
       } else {
           throw new Exception("No se encontro el usuario");
       }
    }

    private static function getContraseniaUsuario($usuario){


        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = " SELECT contrasenia FROM usuarios where nombre = ?;";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $usuario);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró el usuario
        if ($resultado) {
            // Devolver la contraseña
            return $resultado['contrasenia'];
        } else {
            // Devolver null si el usuario no se encontró
            throw new Exception("No se encontro el usuario");
        }
    }

    public static function registrarUsuario($usuario, $contrasenia){

        if (!self::comprovarUsuarioUsado($usuario)){
            $ok = true;
            $conexion = Conexion::getInstancia()->getConexion();
            $conexion->beginTransaction();

            $contrasenia = self::codificar($contrasenia);

            $consulta = "INSERT INTO usuarios (nombre, contrasenia) VALUES (?, ?)";
            $stmt = $conexion->prepare($consulta);
            $stmt->bindParam(1, $usuario);
            $stmt->bindParam(2, $contrasenia);

            $stmt->execute();

            $ok = $stmt->rowCount() > 0;

            if ($ok){
                $conexion->commit();
            }
            else{
                $conexion->rollback();
            }

            return $ok;
        } else{
            throw new Exception("El usuario ya se esta usando");
        }
    }

    public static function comprovarUsuarioUsado($usuario) {
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM ut6_Sesiones_02_ej3.usuarios where nombre = ?;";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $usuario);

        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    private static function getId($usuario){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT id FROM usuarios where nombre = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $usuario);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) {
            // Devolver la contraseña
            return $resultado['id'];
        } else {
            // Devolver null si el usuario no se encontró
            throw new Exception("No se encontro el usuario");
        }
    }

    public static function getNombreUsuario($usuario){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT nombre FROM usuarios where id = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $usuario);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) {
            // Devolver la contraseña
            return $resultado['nombre'];
        } else {
            // Devolver null si el usuario no se encontró
            throw new Exception("No se encontro el usuario");
        }
    }
}