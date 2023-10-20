<?php
require_once ("Precipitable.interface.php");
require_once ("Precipitacion.class.php");
class Ciudad implements Precipitable {
    private $nombre;
    private $precipitaciones;

    public function __construct($nobre, $precipitaciones) {
        $this->nombre = $nobre;
        $this->precipitaciones = $precipitaciones;
    }

    public function getNombre() {
        return $this->nombre;
    }

    function medidaPrecictacionAnual() {
        $sumaTotal = 0;

        foreach ($this->precipitaciones as $precipitacion){
            $sumaTotal += $precipitacion->getValor();
        }

        return (round($sumaTotal / sizeof($this->precipitaciones), 2));
    }
}