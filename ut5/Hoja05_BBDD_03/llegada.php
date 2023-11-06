<?php
require_once "Funicular.class.php";

    if (isset($_POST["llegada"])){
        if (Funicular::llegada()){
            echo ("Los cambios se han ejecutado correctamente");
        } else{
            echo ("Los cambios no se han ejecutado correctamente");
        }
    }
?>

<h1>Llegada</h1>

<form action="#" method="post">
    <input type="submit" name="llegada" value="Llegada" />
</form>

<a href="principal.html"> Pagina principal</a>