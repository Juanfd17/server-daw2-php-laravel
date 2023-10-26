<?php
require_once ("NBADaw.class.php");
require_once ("Jugador.class.php");
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
        <h1>Jugador de baja</h1>
        <select name="jugador">
            <?php
                foreach ($jugadoresEquipo as $jugador){
                    echo "<option value='".$jugador->getCodigo()."' name='jugador' label='".$jugador->getNombre()."'>";
                }
            ?>
        </select>

        <h1>Datos Nuevo jugador</h1>
        <?php
            echo '<input type="hidden" name="equipo" value="'.$_POST["equipo"].'">';
        ?>
        <label id="nombre">Nombre:
            <input type="text" name="nombre" required>
        </label>
        <br>
        <label id="procedencia">Procedencia:
            <input type="text" name="procedencia" required>
        </label>
        <br>
        <label id="alutra">Altura:
            <input type="number" name="altura" required>
        </label>
        <br>
        <label id="peso">Peso:
            <input type="number" name="peso" required>
        </label>
        <br>
        <select name="posicion" id="posicion" required>Posicion:
            <option name="posicion" value="F-G">F-G</option>
        </select>
        <br>
        <input type="submit" name="actualizar" value="Actualizar" />
    </form>
    <?php
}

if (isset($_POST["actualizar"])){
    $nuevoJugador = new Jugador(0, $_POST["nombre"], $_POST["procedencia"], $_POST["altura"], $_POST["peso"], $_POST["posicion"],  $_POST["equipo"]);

    NBADaw::addJugador($nuevoJugador);
    NBADaw::borrarJugador($_POST["jugador"]);
}
?>

<a href="verJugadoresPorEquipos.php">Lista Jugadores</a>
