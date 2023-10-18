<?php
require_once ("Conexion.class.php");
require_once ("Libro.class.php");
class LibrosDao {
    public static function getLibros() {
        $conexion = Conexion::getInstancia()->getConexion();
        $consulta = "select * from libros";
        $resultado = $conexion->query($consulta);
        $libros = [];
        while ($registro = $resultado->fetch()) {
            array_push($libros, $registro);
            //echo $registro['numero_ejemplar'].": ".$registro['titulo'].": ".$registro['anyo_edicion'].": ".$registro['precio'].": ".$registro['fecha_adquisicion']."<br />";
        }

        return $libros;
    }
}