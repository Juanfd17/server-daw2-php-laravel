<html>
<head>
    <title>Desarrollo Web</title>
</head>
<body>
    <?php
    $peliculas = ["El padrino", "El padrino II", "La vida es bella", "Salvar al soldado Ryan", "El pianista", "El rey león", "El caballero oscuro", "Origen", "El club de la lucha", "El señor de los anillos El retorno del rey", "Pulp Fiction", "El señor de los anillos La comunidad del anillo", "El bueno, el feo y el malo", "El señor de los anillos Las dos torres", "Matrix", "Seven", "La lista de Schindler", "El silencio de los corderos", "La vida de Brian"];
     if (isset($_POST['enviar'])) {
         $peliculaBusca = strtolower($_POST["pelicula"]);
        $peliculasCoincide = [];
        foreach ($peliculas as $pelicula){
            $pelicula = strtolower($pelicula);
            if (str_contains($pelicula, $peliculaBusca)){
                array_push($peliculasCoincide, $pelicula);
            }
        }

         muestra($peliculasCoincide);
    } else {
    ?>
    <form name="input" action="" method="post">
        <label for="pelicula">Nombre de la pelicula: </label>
        <input type="text" name="pelicula" id="pelicula" />
        <br />

        <input type="submit" name="enviar" value="Enviar" />
    </form>
    <?php
     }
    function muestra($peliculas){
        echo "<table>";

        foreach ($peliculas as $pelicula){
            $pelicula = str_replace(" ", "-", $pelicula);
            $ruta = "./img/".$pelicula;
            $extension = ".jpeg";

            if (!file_exists($ruta.$extension)){
                if (!file_exists($ruta.".jpg")){
                    $extension = ".png";
                } else{
                    $extension = ".jpg";
                }
            }
            echo "<tr>";
            echo "<td><img src=$ruta$extension></td><td>$pelicula</td>";
            echo "</tr>";
        }

        echo "</table>";
     }
     ?>
</body>
</html>