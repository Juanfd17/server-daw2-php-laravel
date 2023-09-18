<?php
    $numero = 23;
    $primo = true;

    for ($i = 2; $i < ($numero / 2) +1; $i++) {
        if ($numero % $i == 0){
            $primo = false;
        }
    }

    if ($primo) {
        echo "es primo";
    } else {
        echo "no es primo";
    }
?>