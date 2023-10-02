<html>
<head>
    <title>Desarrollo Web</title>
</head>
<body>
    <?php
        if (!isset($marcaCoches)) {
            $marcaCoches = [
                "Seat" => ["Ibiza", "Malaga", "Ateca", "Leon", "Tarraco", "Marbella"],
                "Audi" => ["RS6", "R8", "A8", "A3", "A7", "Q7"],
                "Ford" => ["Fiesta", "F150", "Raptor", "Focus", "Puma", "Kuga"]
            ];
        }

        if ((!isset($_POST["mostrar"]) and !isset($_POST["actualizar"])) or isset($_POST["mostrar"])){
            formulario($marcaCoches);
        }

        if (isset($_POST["mostrar"])){
            $marca = $_POST["marca"];
            mostrar($marcaCoches[$marca], $marca);
        } elseif (isset($_POST["actualizar"])){
            $marca = $_POST["marca"];
            $cochesActualizados = actualizar($_POST["coche"], $marcaCoches[$marca]);

            formulario($marcaCoches);
        }

    function formulario($marcaCoches){
    ?>
        <form name="input" action="" method="post">
            <h1>Busca tu coche</h1>
            <label for="marca">Marca:
                <select name="marca">
                    <?php
                        foreach ($marcaCoches as $marca => $coche){
                            if ($marca == $_POST["marca"]){
                                echo "<option value='$marca' selected>$marca</option>";

                            } else {
                                echo "<option value='$marca'>$marca</option>";
                            }
                        }
                    ?>
                </select>
            </label>
            <br />

            <input type="submit" name="mostrar" value="Mostrar" />
        </form>
    <?php
    }
    ?>


    <?php
    function mostrar($coches, $marca) {
    ?>
        <form name="input" action="" method="post">
            <label for="coche[]">Coches
                <br>
                <?php
                    echo "<input type='hidden' name='marca' value=$marca>";
                    foreach ($coches as $coche){
                        echo "<input type='text' name='coche[]' value='$coche'/> <br>";
                    }
                ?>
            </label>
            <input type='submit' name='actualizar' value='Actualizar'/>
        </form>
    <?php
    }

    function actualizar($cochesActualizados, $cochesAntes){

            for ($i = 0; $i < count($cochesActualizados); $i++) {
                if ($cochesActualizados[$i] != $cochesAntes[$i]){
                    echo "<h1>Se ha actualizado ".$cochesAntes[$i]." por ".$cochesActualizados[$i]."</h1>";
                }
            }
        }
    ?>
</body>
</html>
