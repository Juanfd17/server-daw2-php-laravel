<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="libros.css">
</head>
<body>
    <table>

    <?php
        require_once ("LibrosDao.class.php");
        $libros = LibrosDao::getLibros();
        echo "<tr><td>Numero Ejemplar</td><td>Titulo</td><td>Año de edicion</td><td>Precio</td><td>Fecha adquisicion</td></tr>";
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
