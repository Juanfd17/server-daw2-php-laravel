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


    <?php
        if (isset($_POST["mostrar"]) or isset($_POST["actualizar"])) {
            $marca = $_POST["marca"];
            ?>
                <h1>Coche</h1>

                <?php
                    foreach ($marcaCoches[$marca] as $coche){
                       echo "<input type='text' name='coche[]' value='$coche'/> <br>";
                    }
                ?>
                <input type="submit" name="actualizar" value="Actualizar" />

            <?php
        }

        if (isset($_POST['actualizar'])){
            $actualizados = [
                    "nuevos" =>[],
                    "viejos" =>[]
            ];
            $cochesNuevos = $_POST["coche"];

            for ($i = 0; $i < count($cochesNuevos); $i++) {
                if ($cochesNuevos[$i] != $marcaCoches[$marca][$i]){
                    $actualizados["nuevos"][] = $cochesNuevos[$i];
                    $actualizados["viejos"][] = $marcaCoches[$marca][$i];

                    $marcaCoches[$marca][$i] = $cochesNuevos[$i];
                }
            }

            for ($j = 0; $j < count($actualizados["nuevos"]); $j++) {
                echo "<h1>Se ha actualizado ".$actualizados["viejos"][$j]." por ".$actualizados["nuevos"][$j]."</h1>";

                print_r ($marcaCoches[$marca]);

            }
        }
    ?>
    </form>

</body>
</html>
