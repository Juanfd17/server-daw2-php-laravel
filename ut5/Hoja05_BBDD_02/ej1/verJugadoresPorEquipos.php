<?php
require_once ("NBADaw.class.php");
$equipos = NBADaw::getNombreEquipos();

?>

<form action="#" method="post">
    <select name="equipo">
        <?php
            foreach ($equipos as $equipo){
                if (isset($_POST["equipo"]) && $_POST["equipo"] == $equipo){
                    echo "<option id='equipo' value='$equipo' label='$equipo' selected>";
                } else{
                    echo "<option id='equipo' value='$equipo' label='$equipo'>";
                }
            }
        ?>
    </select>

    <input type="submit" name="mostrar" value="Mostrar" />
</form>

<?php
    if (isset($_POST["mostrar"])){

        $jugadoresEquipo = NBADaw::getJugadoresEquipo($_POST["equipo"]);
        ?>

        <form action="#" method="post">
            <table border="1">
                <?php
                echo "<tr><td>Nombre</td><td>Peso</td></tr>";
                    foreach ($jugadoresEquipo as $jugador){
                        echo "<tr><td><label id='".$jugador->getCodigo()."'>".$jugador->getNombre()."</td><td><input id='peso' name='".$jugador->getCodigo()."' type='number' value='".$jugador->getPeso()."'>Kg</td></tr>";
                    }
                ?>
            </table>
            <input type="submit" name="actualizar" value="Actualizar" />
            </form>
    <?php
    }

    if (isset($_POST["actualizar"])){
        $jugadores = array_keys($_POST);
        for ($jugador = 0; $jugador < sizeof($jugadores) -1; $jugador++) {
            NBADaw::actualizarPesoJugador($jugadores[$jugador], $_POST[$jugadores[$jugador]]);
       }
    }
?>

<a href="traspasoJugadores.php">Traspaso Jugadores</a>