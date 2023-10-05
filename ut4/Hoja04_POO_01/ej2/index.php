<?php
    require_once('Coche.class.php');
    $coche = new Coche("0000AAA", 50);

    echo $coche;

    $coche->acelera(140);
    echo "<br>".$coche;

    $coche->frena(140);
    echo "<br>".$coche;

?>
