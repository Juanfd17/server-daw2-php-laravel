<?php
    echo calcularLetraDNI(71683715);
    function calcularLetraDNI($dni){
        $letras = ["T","R","W","A","G","M","Y","F","P","X","B","N","J","Z","S","S","Q","V","H","L","C","K","E"];
        return $letras[$dni%23];
    }
?>