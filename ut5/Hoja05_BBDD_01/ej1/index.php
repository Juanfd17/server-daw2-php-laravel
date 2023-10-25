<?php
require_once ("LibrosDao.class.php");
if (isset($_POST["nuevoLibro"])){
    print_r($_POST);
    $libro = new Libro($_POST["titulo"], $_POST["anio"], $_POST["precio"], $_POST["compra"]);
    LibrosDao::addLibro($libro);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="guardar_libros.html" class="button">Nuevo Libro</a>
    <a href="verLibros.php" class="button">Ver Todos los libros</a>
</body>
</html>
