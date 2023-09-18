<?php
    for ($i = 3; $i != 999; $i++) {
        if (esPrimo($i)){
            echo $i."<br>";
        }
    }
    function esPrimo($numero){
        for ($i = 2; $i < ($numero / 2) +1; $i++) {
            if ($numero % $i == 0){
                return false;
            }
        }
        return true;
    }
?>