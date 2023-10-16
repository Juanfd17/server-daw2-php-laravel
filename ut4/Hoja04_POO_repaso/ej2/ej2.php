<html>
<head>
    <title>Desarrollo Web</title>
</head>
<body>
    <form name="input" action="" method="post">
        <label for="pelicula">Nombre de la pelicula: </label>
        <input type="text" name="pelicula" id="pelicula" />
        <br />

        <input type="submit" name="enviar" value="Enviar" />
    </form>

    <?php
        require_once ("Pelicula.class.php");
        require_once ("Actor.class.php");
        $nombrePeli = ["El padrino", "El padrino II", "La vida es bella", "Salvar al soldado Ryan", "El pianista", "El rey león", "El caballero oscuro", "Origen", "El club de la lucha", "El señor de los anillos El retorno del rey", "Pulp Fiction", "El señor de los anillos La comunidad del anillo", "El bueno, el feo y el malo", "El señor de los anillos Las dos torres", "Matrix", "Seven", "La lista de Schindler", "El silencio de los corderos", "La vida de Brian"];
        $peliculas = [];
        $nActor = 0;
        foreach ($nombrePeli as $nombre){
            $pelicula = str_replace(" ", "-", $nombre);
            $ruta = "./img/".$pelicula;
            $extension = ".jpeg";


            if (!file_exists($ruta.$extension)){
                if (!file_exists($ruta.".jpg")){
                    $extension = ".png";
                } else{
                    $extension = ".jpg";
                }
            }

            $actores = [];

            for ($i = 0; $i < 3; $i++) {
                array_push($actores, new Actor("Actor".$nActor));
                $nActor++;
            }

            $ruta .= $extension;
            $peliculas[] = new Pelicula($nombre, $ruta, $actores);
        }

        if (isset($_POST['enviar'])) {
             $peliculaBusca = strtolower($_POST["pelicula"]);
             $peliculasCoincide = [];

             foreach ($peliculas as $pelicula){
                 $nombrePeli = strtolower($pelicula->getNombre());
                 if (str_contains($nombrePeli, $peliculaBusca)){
                     $peliculasCoincide[] = $pelicula;
                 }
             }

             muestra($peliculasCoincide);
        }
     ?>

    <?php
    function muestra($peliculas){
        $nombrePeli = $_POST["pelicula"];
        echo count($peliculas)." peliculas encodas para la busqueda de \"$nombrePeli\"";

        echo "<table border='1'>";

        foreach ($peliculas as $pelicula){
            echo "<tr>";
            echo "<td><img src=".$pelicula->getPortada()." width = '100px'></td><td>".$pelicula->getNombre()."</td><td>";

            foreach ($pelicula->getActores() as $actor){
                echo "<p>".$actor->getNombre()."</p>";
            }

            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
     }
     ?>
</body>
</html>