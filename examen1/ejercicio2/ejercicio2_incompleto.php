<?php

$libros=[
	"Histórica y Aventuras" => [
		["titulo"=>"Las legiones malditas", "imagen" => "legiones_malditas.jpg", "autor" => "Santiago Posteguillo"],
		["titulo"=>"Los pilares de la tierra", "imagen" => "pilares_tierra.jpg", "autor" => "Ken Follett"],
		["titulo" => "La caída de los gigantes", "imagen" => "caida_gigantes.jpg", "autor" => "Ken Follett"],
		["titulo" => "Africanus, el hijo del cónsul", "imagen" => "africanus.jpg", "autor" => "Santiago Posteguillo"]
	],
	"Narrativa" => [
		["titulo" => "Patria", "imagen" => "patria.jpg", "autor" => "Fernando Aramburu"],
		["titulo" => "Dime quién soy", "imagen" => "dime_quien_soy.jpg", "autor" => "Julia Navarro"],
		["titulo"=>"Dispara, yo ya estoy muerto", "imagen" => "dispara_muerto.jpg", "autor" => "Julia Navarro"]
	],
	"Literatura contemporánea" => [
		["titulo" => "Cien años de soledad", "imagen" => "cien_anyos_soledad.jpg", "autor" => "Gabriel García Márquez"],
		["titulo"=>"Crónica de una muerte anunciada", "imagen" => "cronica_muerte.jpg", "autor" => "Gabriel García Márquez"],
		["titulo" => "El amor en tiempos de cólera", "imagen" => "amor_tiempos_colera.jpg", "autor" => "Gabriel García Márquez"]
	],
];

$categorias = array_keys($libros);
function getAutores($libros): array {
	$autores = [];

    foreach ($libros as $categoria){
        foreach ($categoria as $titulo){

            if (!in_array($titulo["autor"], $autores)){
                array_push($autores, $titulo["autor"]);
            }
        }
    }

    return $autores;
}

function getlibrosAutor($libros, $autor): array {
    $librosAutor = [];

    foreach ($libros as $categoria){
        foreach ($categoria as $titulo){

            if ($titulo["autor"] == $autor){
                array_push($librosAutor, $titulo);
            }
        }
    }

    return $librosAutor;
}

function categoriaTitulo($libros, $titulo) {
    foreach ($libros as $categoria){
        foreach ($categoria as $tituloP){

            if ($tituloP["titulo"] == $titulo){
                return key($categoria);
            }
        }
    }

    return null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NOMBRE Y APELLIDOS DEL ALUMNO</title>
</head>
<body>
    <h1>Libros por autores</h1>
    <form name="input" action="" method="post">
        <label for="autor">Autor:
            <select name="autor">
                <?php
                foreach (getAutores($libros) as $autor){
                    if ($autor == $_POST["autor"]){
                        echo "<option value='$autor' selected>$autor</option>";

                    } else {
                        echo "<option value='$autor'>$autor</option>";
                    }
                }
                ?>
            </select>
        </label>
        <input type="submit" name="buscar" value="Buscar" />
    </form>

    <?php
    if (isset($_POST["autor"])) {
        $librosAutor = getlibrosAutor($libros,$_POST["autor"]);

        echo (sizeof($librosAutor)." libros encontrados para el autor ".$_POST["autor"]);

        echo "<table>";
            foreach ($librosAutor as $libro){
                $ruta = "libros/".$libro["imagen"];
                $categoria = categoriaTitulo($libros, $libro["titulo"]);
               echo ('<tr><td><img src='.$ruta.'></td><td>'.$libro["titulo"].'</td><td>'.$categorias[$categoria].'</td></tr>');
            }
        echo "</table>";
    }
    ?>
</body>
</html>