<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <table>

    <?php
        require_once ("LibrosDao.class.php");
        $libros = LibrosDao::getLibros();

        foreach ($libros as $libro){
            echo "<tr>";
            foreach ($libro as $dato){
                echo "<td>".$dato."</td>";
            }
            echo "</tr>";
        }
    ?>

    </table>
    <a href="index.php">Volver al menu</a>
</body>
</html>
