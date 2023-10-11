<?php
require_once ("Bombilla.class.php");
require_once ("Coche.class.php");
function enciendeAlgo(iEncendible $algo) {
    $algo->encender();
}

$coche = new Coche();
$bombilla = new Bombilla(6);

enciendeAlgo($coche);
$coche->repostar(20);
enciendeAlgo($coche);
enciendeAlgo($bombilla);

$coche->apagar();
$bombilla->apagar();
$coche->apagar();
?>