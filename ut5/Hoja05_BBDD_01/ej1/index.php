<?php
require_once ("LibrosDao.class.php");
if (isset($_POST["nuevoLibro"])){
    print_r($_POST);
    LibrosDao::addLibro($_POST["titulo"], $_POST["anio"], $_POST["precio"], $_POST["compra"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <a href="guardar_libros.html">Nuevo Libro</a>
    <a href="verLibros.php">Ver Todos los libros</a>
</body>
</html>
