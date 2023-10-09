<?php
    require_once ("Alimentacion.class.php");
    require_once ("Electronica.class.php");

    $productos = [
        new Alimentacion(12, 2023, "A001", 2.5, "Manzanas"),
        new Alimentacion(6, 2023, "A002", 1.0, "Leche"),
        new Electronica(24, "E001", 599.99, "Smartphone"),
        new Electronica(48, "E002", 399.99, "Tablet"),
    ];

    $precioTotal = 0;
    $productoMasCaro = $productos[0];
    $totalAlimentacion = 0;
    $totalElectronica = 0;
    foreach ($productos as $producto) {
        echo "<p>Categoria: ".get_class($producto)." ".$producto."</p>";

        $precioTotal += $producto->getPrecio();

        if ($productoMasCaro->getPrecio() < $producto->getPrecio()){
            $productoMasCaro = $producto;
        }

        if ($producto instanceof Alimentacion){
            $totalAlimentacion += $producto->getPrecio();
        } else{
            $totalElectronica += $producto->getPrecio();
        }
    }

    echo "<p>Precio total: ".$precioTotal."</p>";
    echo "<p>Producto mas caro: ".$productoMasCaro."</p>";
    echo ("<p>Te has gastado mas en: ").(($totalAlimentacion > $totalElectronica) ? ("Alimentacion ") : ("Electronica"))."</p>"

?>