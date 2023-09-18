<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $temporal = "Juan";
        echo gettype($temporal);
        $temporal = 3.14;
        echo "<br>".gettype($temporal);
        $temporal = false;
        echo "<br>".gettype($temporal);
        $temporal = 3;
        echo "<br>".gettype($temporal);
        $temporal = null;
        echo "<br>".gettype($temporal);
    ?>
</body>
</html>