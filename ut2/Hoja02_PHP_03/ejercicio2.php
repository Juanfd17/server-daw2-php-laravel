<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fecha = new Datetime(date("Y-m-d"));
        $diasRestar = 20;
        $fecha->modify("-$diasRestar day");
        echo $fecha->format("Y-m-d");
    ?>
</body>
</html>