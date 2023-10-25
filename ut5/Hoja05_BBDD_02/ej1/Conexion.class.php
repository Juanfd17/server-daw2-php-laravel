<?php
class Conexion {
    private static ?Conexion $instancia = null;
    private $conexion;
    private $host = '127.0.0.1';
    private $usuario = 'root';
    private $password = '6007';
    private $basedatos = 'dwes_02_nba';

//Constructor privado
    private function __construct() {
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $this->conexion = new PDO(
            "mysql:host={$this->host}; dbname={$this->basedatos}",
            $this->usuario,
            $this->password,
            $opciones
        );
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstancia() {
        if (!self::$instancia) {
            self::$instancia = new Conexion();
        }
        return self::$instancia;
    }

    public function getConexion() {
        return $this->conexion;
    }
}