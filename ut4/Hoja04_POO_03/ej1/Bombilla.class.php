<?php
require_once ("iEncendible.interfaz.php");
require_once ("Estados.Enum.php");

class Bombilla implements iEncendible {
    private $horasDeVida;

    public function __construct($horasDeVida) {
        $this->horasDeVida = $horasDeVida;
    }

    function encender() {
        if ($this->horasDeVida > 0){
            $this->horasDeVida -= 2;
        }
    }

    function apagar() {
        echo ("<p>Apagado</p>");
    }


}