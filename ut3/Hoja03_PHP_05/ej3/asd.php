<?php
$coches = [
    "seat" => ["ibiza", "leon", "ateca", "tarraco"],
    "citroen" => ["c3", "c4 cactus", "berlingo", "c5"],
    "porsche" => ["911", "cayenne", "macan", "panamera"]
];
$marca_seleccionada = isset($_POST["marca"]) ? $_POST["marca"] : null;

if (isset($_POST["actualizar"])){
    print_r($_POST);
}

if(isset($marca_seleccionada) && isset($modelos_modificados)) {
    $modelos_originales = $coches[$marca_seleccionada];

    for ($i = 0; $i < count($modelos_originales); $i++) {
        if ($modelos_originales[$i] != $modelos_modificados[$i]) {
            echo "Se ha modificado $modelos_originales[$i] por $modelos_modificados[$i] <br>";
        }
    }
}
?>

<h2>Busca tu coche</h2>
<form action="" method="post">
    <div>
        <label>Marca</label>
        <select name="marca">
            <?php
            foreach (array_keys($coches) as $marca) {
                echo "<option value = '$marca'";
                //si se ha recibido la marca y coincide con la que estamos seleccionando,
                //ponemos selected true
                if (isset($marca_seleccionada) && $marca == $marca_seleccionada) {
                    echo "selected= 'true'";
                }
                echo ">$marca</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Mostrar" style="background-color: lightgreen;">
    </div>
</form>

<?php if (isset($marca_seleccionada) != null) { ?>
    <form action="" method="post">
        <?php
        $modelos_modificados = $coches[$marca_seleccionada];
        foreach ($coches[$marca_seleccionada] as $modelo) { ?>
            <div>
                <input name="<?php echo $marca_seleccionada ?>[]"
                       value="<?php echo $modelo ?>"
                       type="text">
            </div>
        <?php } ?>
        <div>
            <input type="submit" value="Actualizar" name="actualizar" style='background-color: lightblue'>
        </div>
    </form>
<?php } ?>
