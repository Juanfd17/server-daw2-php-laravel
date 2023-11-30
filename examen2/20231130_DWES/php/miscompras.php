<?php
require_once "BaseDatosDAO.class.php";
require_once "header.php";
session_start();
if (!isset($_SESSION["usuario"])) {
    header('Location: index.php');
}
echo "<h1>compras de ".$_SESSION["usuario"]->getNombre()."</h1>";
?>

<form action="#" method="post">
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

    <input type="submit" name="mostrar" value="Mostrar" />
</form>

<?php

if (isset($_POST["mostrar"])){
    $ventas = BaseDatosDAO::getVentasClientes($_SESSION["usuario"]->getId(), $_POST["comercio"]);

    echo "<img src='../imagenes/comercios/".BaseDatosDAO::getImagenComercio($_POST["comercio"])."'>";


    if (sizeof($ventas) > 0){
        ?>
        <table border="1">
            <tr>
                <td>Importe</td>
                <td>Fecha</td>
                <td>Codigo Seguimiento</td>
            </tr>
        <?php

        foreach ($ventas as $venta){
            ?>
            <tr>
                <?php
                echo "<td>".$venta->getImporte()."</td>";
                echo "<td>".$venta->getFecha()."</td>";
                echo "<td>".$venta->getCodigo()."</td>";
                ?>
            </tr>
            <?php
        }
        ?>
        </table>
    <?php
    } else{
        echo "Aún no se ha realizado ninguna venta.";
    }
}
?>
