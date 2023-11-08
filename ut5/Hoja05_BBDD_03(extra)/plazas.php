<?php
require_once ("Funicular.class.php")
?>

<h1>Gestion de plazas</h1>

<form action="#" method="post">
<?php
    $plazas = Funicular::getplazas();

    foreach ($plazas as $plaza){
        echo "<label for='$plaza[numero]' id='$plaza[numero]'>Plaza $plaza[numero]:
                <input name='precios[]' type='text' ' value='$plaza[precio]'>
                <input type='hidden' name='numeros[]' value='$plaza[numero]'>
                </label>€<br>";
    }
?>
    <input type="submit" name="actualizar" value="Actualizar" />
</form>

<?php
    if (isset($_POST["actualizar"])){
        Funicular::actualizarPrecio($_POST["precios"], $_POST["numeros"]);
    }

echo ("<br><a href='principal.html'>Principal</a>")

?>

