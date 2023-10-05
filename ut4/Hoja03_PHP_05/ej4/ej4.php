<?php
    require_once('liga.php');
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

$liga = new liga([new equipo("madrid", "Ancelotti", ["Courtois", "Benzema", "Vinicius"], "img/madrid"), new equipo("barcelona", "Xavi", ["Ter Stegen", "Ansu Fati", "Lewandowski"], "img/barcelona")]);

?>

    <form action="" method="post">
        <h1>Elige un equipo</h1>

        <label for="equipo">Equipo:
            <select name="equipo">
                <option value="todos">--Todos--</option>
                <?php
                foreach ($liga->getEquipos() as $equipo){
                    $nombreEquipo = $equipo->getNombre();
                    if ($nombreEquipo == $_POST["equipo"]) {
                        echo "<option value='$nombreEquipo' selected>$nombreEquipo</option>";

                    } else {
                        echo "<option value='$nombreEquipo'>$nombreEquipo</option>";
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
    mostrar($liga ,$_POST["equipo"], $_POST["puesto"]);
}

function mostrar($liga, $equipo, $puesto){
    echo "<table border='2'>";
    if ($equipo == "todos"){

    } else {
        if ($puesto == "entrenador"){
            echo $liga->getEquipoNombre($equipo)->getEntrenador();
        } else{
            echo $liga->getEquipoNombre($equipo)->imprimirJugadores();
        }
    }
    echo "</table>";
}
?>