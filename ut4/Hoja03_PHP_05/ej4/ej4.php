<?php
    require_once('equipo.php');
$equipos = [

"madrid" => [
        "entrenador" => ["Ancelotti"],
        "jugadores" => ["Courtois", "Benzema", "Vinicius"],
        "rutaIMG" => "./img/madrid/"
    ],
    "barcelona" => [
        "entrenador" => ["Xavi"],
        "jugadores" => ["Ter Stegen", "Ansu Fati", "Lewandowski"],
        "rutaIMG" => "./img/barcelona/"
    ]
];

$madrid = new equipo("Ancelotti", ["Courtois", "Benzema", "Vinicius"]);
print_r($madrid->getJugadoresEquipo());
?>

    <form action="" method="post">
        <h1>Elige un equipo</h1>

        <label for="equipo">Equipo:
            <select name="equipo">
                <option value="todos">--Todos--</option>
                <?php
                foreach ($equipos as $equipo => $entrenador) {
                    if ($equipo == $_POST["equipo"]) {
                        echo "<option value='$equipo' selected>$equipo</option>";

                    } else {
                        echo "<option value='$equipo'>$equipo</option>";
                    }
                }
                ?>
            </select>
        </label>

        <br>

        <label for="puesto">Puesto:
            <?php
            if (!isset($_POST["puesto"]) or "entrenador" == $_POST["puesto"]){
                echo "<input type='radio' name='puesto' value='entrenador' checked> Entrenador";
                echo "<input type='radio' name='puesto' value='jugadores'> Jugadores";
            } else {
                echo "<input type='radio' name='puesto' value='entrenador'> Entrenador";
                echo "<input type='radio' name='puesto' value='jugadores' checked> Jugadores";
            }
            ?>


        </label>

        <br>

        <input type="submit" name="buscar" value="Buscar" />
    </form>

<?php
if (isset($_POST["buscar"])){
    mostrar($equipos ,$_POST["equipo"], $_POST["puesto"]);
}

function mostrar($equipos, $equipo, $puesto){
    echo "<table border='2'>";
    if ($equipo == "todos"){
        echo "<tr>";
        foreach (array_keys($equipos) as $equipo){
            echo "<td><h1>$equipo</h1></td>";
        }
        echo "</tr>";

        for ($i = 0; $i < count(nombres($equipos,$equipo, $puesto)); $i++) {
            echo "<tr>";
            foreach (array_keys($equipos) as $equipo){
                echo "<td>";
                $nombre = nombres($equipos,$equipo, $puesto)[$i];
                echo "<p>$nombre</p>";
                $ruta = $equipos[$equipo]["rutaIMG"].$puesto.'/'.$nombre.".jpeg";
                echo ("<img src='$ruta' height='100px'></td>");
                echo "</td>";
            }
            echo "</tr>";
        }

    } else {
        foreach ($equipos[$equipo][$puesto] as $nombre){
            $ruta = $equipos[$equipo]["rutaIMG"].$puesto.'/'.$nombre.".jpeg";
            echo "<tr><td><img src='$ruta' height='100px'></td><td><p>$nombre</p></td></tr>";
        }
    }
    echo "</table>";
}

function nombres($equipos,$equipo, $puesto){
    if (isset($posicion)){
        return $equipos[$equipo][$puesto][$posicion];
    } else{
        return $equipos[$equipo][$puesto];
    }
}
?>