<?php
    require_once "Funicular.class.php"
?>

<h1>Reserva del asiento</h1>

<form action="#" method="post">
    <label id="nombre"> Nombre
        <input type="text" id="nombre" name="nombre">
    </label>

    <br>

    <label id="dni"> DNI
        <input type="text" id="dni" name="dni">
    </label>

    <p>Asiento
        <select name="asiento" id="asiento">
            <?php
            $asientosLibres = Funicular::getplazasLibres();
            foreach ($asientosLibres as $asientoLibre){
                echo "<option id='equipo' value='$asientoLibre[numero]' label='$asientoLibre[numero] ($asientoLibre[precio]€) '>";
            }
            ?>
        </select>
    </p>

    <input type="submit" name="reservar" value="Reservar"/>
</form>

<?php
    if (isset($_POST["reservar"])){
        print_r($_POST);
    }
?>