<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fechaHoy = new DateTime(date("Y-m-d"));
        $fechaDada = new DateTime("2023-09-10");
        $direfencia = $fechaHoy->diff($fechaDada);
        echo $direfencia->days;
    ?>
</body>
</html>