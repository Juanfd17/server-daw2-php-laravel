<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cantidadDinero = 37;
        $billetes10 = 0;
        $billetes5 = 0;
        $monedas1 = 0;

        $billetes10 = (integer) ($cantidadDinero / 10);
        $cantidadDinero = $cantidadDinero - $billetes10 * 10;

        $billetes5 = (integer) ($cantidadDinero / 5);
        $cantidadDinero = $cantidadDinero - $billetes5 * 5;

        $monedas1 = (integer) ($cantidadDinero / 1);
        $cantidadDinero = $cantidadDinero - $monedas1;

        echo "Billetes de 10: $billetes10<br>";
        echo "Billetes de 5: $billetes5<br>";
        echo "Monedas de 1: $monedas1<br>";
    
    ?>
</body>
</html>