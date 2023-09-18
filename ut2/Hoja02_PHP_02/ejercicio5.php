<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variable1=3;
        $variable2="string";

        echo "variable1: ".gettype($variable1);
        echo "<br>variable2: ".gettype($variable2);

        $aux = $variable1;
        $variable1 = $variable2;
        $variable2 = $aux;

        echo "<br>variable1: ".gettype($variable1);
        echo "<br>variable2: ".gettype($variable2);
    ?>
</body>
</html>