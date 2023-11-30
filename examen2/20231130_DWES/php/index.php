<?php
require_once "BaseDatosDAO.class.php";
require_once "header.php";
session_start();

if (isset($_POST["iniciar"])){
    try {
        $_SESSION["usuario"] = BaseDatosDAO::getClienteCodigoSuguimiento($_POST["codigo"]);
    } catch (Exception $e){
        echo $e->getMessage();
    }
}

if (isset($_SESSION["usuario"])){
    header('Location: miscompras.php');
}

?>
<h1>Asociacion de comercios</h1>
<section>
    <h1>Cliente gasta mas</h1>
    <?php
    $max = BaseDatosDAO::clienteMasGasto();
    $cliente = BaseDatosDAO::getClienteid($max[1]);
    echo "<img src='../imagenes/clientes/".$cliente->getImagen()."'>";
    echo "El cliente que mas ha gasatado es ".$cliente->getNombre()." con ".$max[0];
    ?>
</section>
<section>
    <h1>Busca tu compra</h1>

    <form class="text-center" method="post" action="#">
        <div><input type="text" name="codigo" placeholder="Codigo seguimiento" required></div>
        <div><button type="submit" name="iniciar">Buscar</button></div>
    </form>
</section>
