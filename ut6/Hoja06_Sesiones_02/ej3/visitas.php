<?php
    session_start();

    if (isset($_POST["cerrarSesion"])){
        session_destroy();
    } else if (isset($_POST["borrarRegistro"])){
        unset($_SESSION["visitas"]);
    }
?>

<form method="post" action="#">
<?php
    if (isset($_SESSION["usuario"])){
        require_once ("Tienda.class.php");

        echo "bienvenid@ ".Tienda::getNombreUsuario($_SESSION["usuario"]);

        if (isset($_SESSION["visitas"])){
            array_push($_SESSION["visitas"], date('d/m/Y H:i:s'));
        } else {
            $_SESSION["visitas"] = [date('d/m/Y H:i:s')];
        }

        print_r($_SESSION["visitas"]);
        echo "<input type='submit' name='borrarRegistro' value='Borrar Registros'/>";

        echo "<input type='submit' name='cerrarSesion' value='Cerrar Sesion'/>";
    } else {
        echo "podrias iniciar sesion: ";
        echo "<a href='index.php'>Iniciar Sesion</a>";
    }
?>

