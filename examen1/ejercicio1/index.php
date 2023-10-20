<?php
require_once ("Precipitacion.class.php");
require_once ("Ciudad.class.php");

$precipitaciones =[
    "Oviedo" => [
                new Precipitacion("Enero", 85),
                new Precipitacion("Febrero", 68),
                new Precipitacion("Marzo", 67),
                new Precipitacion("Abril", 86),
                new Precipitacion("Mayo", 62),
                new Precipitacion("Junio", 54),
                new Precipitacion("Julio", 39),
                new Precipitacion("Agosto", 61),
                new Precipitacion("Septiembre", 84),
                new Precipitacion("Octubre", 99),
                new Precipitacion("Noviembre", 120),
                new Precipitacion("Diciembre", 115)
    ],

    "Sevilla"=> [
                new Precipitacion("Enero", 76),
                new Precipitacion("Febrero", 73),
                new Precipitacion("Marzo", 66),
                new Precipitacion("Abril", 53),
                new Precipitacion("Mayo", 34),
                new Precipitacion("Junio", 14),
                new Precipitacion("Julio", 1),
                new Precipitacion("Agosto", 3),
                new Precipitacion("Septiembre", 18),
                new Precipitacion("Octubre", 69),
                new Precipitacion("Noviembre", 87),
                new Precipitacion("Diciembre", 82)
    ],

    "Madrid"=> [
                new Precipitacion("Enero", 43),
                new Precipitacion("Febrero", 44),
                new Precipitacion("Marzo", 35),
                new Precipitacion("Abril", 45),
                new Precipitacion("Mayo", 44),
                new Precipitacion("Junio", 28),
                new Precipitacion("Julio", 11),
                new Precipitacion("Agosto", 11),
                new Precipitacion("Septiembre", 30),
                new Precipitacion("Octubre", 51),
                new Precipitacion("Noviembre", 58),
                new Precipitacion("Diciembre", 50)
    ]
];

$nombreCiudades = array_keys($precipitaciones);
$ciudades = [];
foreach ($nombreCiudades as $ciudad){
    $precipitacionCiudad = $precipitaciones[$ciudad];
    array_push($ciudades, new Ciudad($ciudad, $precipitacionCiudad));
}

?>
<h1>Comprobar precipitaciones</h1>
<form name="input" action="" method="post">
    <li>Ciudades:
        <?php
            foreach ($nombreCiudades as $nombre){
                if (isset($_POST["ciudad"]) and $nombre == $_POST["ciudad"]){
                    echo ("<br>".'<input type="radio" checked name="ciudad" value='.$nombre.'>'.$nombre);

                } else {
                    echo ("<br>".'<input type="radio" name="ciudad" value='.$nombre.'>'.$nombre);
                }
            }
        ?>
        <br>
        <label id="media">Precipitacion media
            <?php
                if (isset($_POST["media"])){
                    echo '<input type="number" name="media" value="'.$_POST["media"].'">';
                } else {
                    echo '<input type="number" name="media" value="0">';
                }
            ?>
        </label>

        <button type="submit">Comprobar</button>

    </li>
</form>

<?php
    if (isset($_POST["media"])){
        $nCiudad = 0;
        for ($i = 0; $i < sizeof($nombreCiudades); $i++) {
            if ($nombreCiudades[$i] === $_POST["ciudad"]){
                $nCiudad = $i;
                break;
            }
        }

        if ($ciudades[$nCiudad]->medidaPrecictacionAnual() > $_POST["media"]){
            echo ("La preciputacion anual media de ".$_POST["ciudad"]." es MAYOR que ".$_POST["media"]." Concretamente es de ".$ciudades[$nCiudad]->medidaPrecictacionAnual());
        } else {
            echo ("La preciputacion anual media de ".$_POST["ciudad"]." es Menor que ".$_POST["media"]." Concretamente es de ".$ciudades[$nCiudad]->medidaPrecictacionAnual());
        }
    }
?>
