<?php
    $cantidad = 888.88;
    desglose($cantidad);

    function desglose($cantidad){
        $monedas = [500,200,100,50,20,10,5,2,1,0.50,0.20,0.10,0.05,0.02,0.01];
        foreach ($monedas as $moneda){
            $cuantos = (integer) ($cantidad / $moneda);
            $cantidad -= $cuantos * $moneda;
            $cantidad = round($cantidad, 2);
            echo "De ".$moneda.": ".$cuantos." me queda: ".$cantidad."<br>";
        }
    }
?>