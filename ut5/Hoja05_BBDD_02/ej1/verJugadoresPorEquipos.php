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

        <table border="1">
            <?php
            echo "<tr><td>Nombre</td><td>Peso</td></tr>";
                foreach ($jugadoresEquipo as $jugador){
                    echo "<tr><td>".$jugador->getNombre()."</td><td>".$jugador->getPeso()."</td></tr>";
                }
            ?>
        </table>
    <?php
    }
?>