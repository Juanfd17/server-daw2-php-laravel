<?php
require_once "BaseDatosDAO.class.php";
require_once "header.php";
session_start();
if (!isset($_SESSION["usuario"])) {
    header('Location: index.php');
}
echo "<h1>insertar nueva compra de ".$_SESSION["usuario"]->getNombre()."</h1>";
?>

<form action="#" method="post">
    <label> Comercio
        <select name="comercio">
            <?php
            $comercios = BaseDatosDAO::getComercios();
                foreach ($comercios as $comercio){
                    if (isset($_POST["comercio"]) && $_POST["comercio"] == $comercio->getId ()){
                        echo "<option id='comercio' value='".$comercio->getId()."' label='".$comercio->getNombre()."' selected>";
                    } else{
                        echo "<option id='comercio' value='".$comercio->getId()."' label='".$comercio->getNombre()."'>";
                    }
                }
            ?>
        </select>
    </label>

    <label id="fecha"> Fecha
        <input type="datetime-local" name="fecha">
    </label>

    <label id="importe"> Importe
        <input type="number" name="importe">
    </label>

    <input type="submit" name="insertar" value="Insertar compra" />
</form>

<?php
if (isset($_POST["insertar"])){
    if (BaseDatosDAO::insertarCompra($_SESSION["usuario"]->getId(), $_POST["comercio"], $_POST["fecha"], $_POST["importe"])){
        echo "Insertado";
    } else{
        echo "no insertado";
    }
}
?>