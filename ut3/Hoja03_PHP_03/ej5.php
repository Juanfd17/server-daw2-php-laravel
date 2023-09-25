<?php
    $articulos = [
        "articulo1" => ["codigo" => 0, "descripcion" => "d", "existencias" => 1],
        "articulo2" => ["codigo" => 1, "descripcion" => "c", "existencias" => 3],
        "articulo3" => ["codigo" => 2, "descripcion" => "b", "existencias" => 0],
        "articulo4" => ["codigo" => 3, "descripcion" => "a", "existencias" => 2],
    ];

    echo "El codigo del articulo con mas existencias es: ".mayor($articulos);
    echo "<br>La suma de las existencias de todos los articulos es: ".sumar($articulos);
    mostrar($articulos);

    function mayor($articulos){
        $nombre = "";
        $n = 0;
        foreach ($articulos as $articulo){
            if ($articulo["existencias"] > $n) {
                $n = $articulo["existencias"];
                $nombre = $articulo["codigo"];
            }
        }

        return $nombre;
    }

    function sumar($articulos){
        $suma = 0;
        foreach ($articulos as $articulo){
            $suma += $articulo["existencias"];
        }

        return $suma;
    }

    function mostrar($articulos){
        echo "<table>";
        foreach ($articulos as $articulo){
            echo "<tr>";

            foreach ($articulo as $variable){
                echo "<td>".$variable."</td>";
            }

            echo "</tr>";
        }
        echo "</table>";
    }


?>