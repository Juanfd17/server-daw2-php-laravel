<?php
require_once ("Conexion.class.php");
require_once ("Usuario.class.php");
require_once ("Comercio.class.php");
require_once ("Venta.class.php");
class BaseDatosDAO {
    public static function getClienteCodigoSuguimiento($codigoSeguimiento){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM clientes inner join ventas on id = id_cliente where codigo_seguimiento = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $codigoSeguimiento);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) {
            return new Usuario($resultado["id"], $resultado["dni"], $resultado["nombre"], $resultado["apellidos"], $resultado["imagen"]);

        } else {
            throw new Exception("No se ha encontro ninguna venta con ese codigo");
        }
    }

    public static function getComercios(){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM dwes_examen_202311.comercios";
        $stmt = $conexion->query($consulta);

        $comercios = [];

        while ($fila = $stmt->fetch()){
            array_push($comercios, new Comercio($fila["id"], $fila["nombre"], $fila["imagen"]));
        }

        return $comercios;
    }

    public static function getVentasClientes($idCliente, $idComercio){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM ventas where id_cliente = ? and id_comercio = ? order by importe desc";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $idCliente);
        $stmt->bindParam(2, $idComercio);

        $stmt->execute();

        $ventas = [];

        while ($fila = $stmt->fetch()){
            array_push($ventas, new Venta($fila["id_cliente"], $fila["id_comercio"], $fila["fecha"], $fila["importe"], $fila["codigo_seguimiento"]));
        }

        return $ventas;
    }

    public static function getImagenComercio($idComercio){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT imagen FROM comercios where id = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $idComercio);

        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public static function insertarCompra($cliente, $comercio, $fecha, $importe){
        $ok = true;
        $conexion = Conexion::getInstancia()->getConexion();
        $conexion->beginTransaction();

        $consulta = "INSERT INTO ventas (id_cliente, id_comercio, fecha, importe) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $cliente);
        $stmt->bindParam(2, $comercio);
        $stmt->bindParam(3, $fecha);
        $stmt->bindParam(4, $importe);

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

    public static function clienteMasGasto(){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT sum(importe) as total, id_cliente FROM ventas group by id_cliente order by total desc";
        $stmt = $conexion->prepare($consulta);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        $resultados = [];

        if ($resultado) {
            array_push($resultados,[$resultado["total"], $resultado["id_cliente"]]);

        } else {
            throw new Exception("No se ha encontro ninguna venta con ese codigo");
        }

        $max = [0,0];


                $max[0] = $resultados[0][0];
                $max[1] = $resultados[0][1];


        return $max;
    }

    public static function getClienteid($id){
        $conexion = Conexion::getInstancia()->getConexion();

        $consulta = "SELECT * FROM clientes inner join ventas on id = id_cliente where id = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bindParam(1, $id);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) {
            return new Usuario($resultado["id"], $resultado["dni"], $resultado["nombre"], $resultado["apellidos"], $resultado["imagen"]);

        } else {
            throw new Exception("No se ha encontro ninguna venta con ese codigo");
        }
    }
}