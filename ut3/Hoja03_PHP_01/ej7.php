<?php
    $numero = 5;
    $factorial = 1;
    for ($i = $numero; $i != 0; $i--) {
        $factorial *= $i;
    }
    echo $factorial;
?>