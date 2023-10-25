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
            array_push($libros, [$registro['numero_ejemplar'], $registro['titulo'], $registro['anyo_edicion'], $registro['precio'], $registro['fecha_adquisicion']]);
            //echo $registro['numero_ejemplar'].": ".$registro['titulo'].": ".$registro['anyo_edicion'].": ".$registro['precio'].": ".$registro['fecha_adquisicion']."<br />";
        }

        return $libros;
    }

    public static function addLibro($libro) {
        $conexion = Conexion::getInstancia()->getConexion();
        $consulta = "INSERT INTO `dwes_01_libros`.`libros` (`titulo`, `anyo_edicion`, `precio`, `fecha_adquisicion`) VALUES (?, ?, ?, ?);";

        $stmt = $conexion->prepare($consulta);

        $stmt->bindValue(1, $libro->getTitulo());
        $stmt->bindValue(2, $libro->getAnyoEdicion());
        $stmt->bindValue(3, $libro->getPrecio());
        $stmt->bindValue(4, $libro->getFechaAdquisicion());

        return $stmt->execute();
    }
}