<?php
require_once ("iEncendible.interfaz.php");
require_once ("Estados.Enum.php");
class Coche implements iEncendible{
    private $gasolina;
    private $bateria;
    private $estado;

    public function __construct() {
        $this->gasolina = 0;
        $this->bateria = 10;
        $this->estado = Estados::apagado;
    }

    function encender(){
        if ($this->gasolina > 0 and $this->bateria > 0 and $this->estado = Estados::apagado){
            $this->estado = Estados::encendido;
            $this->gasolina--;
            $this->bateria--;
        } else {
            echo "<p>El coche no puede arrancar</p>";
        }
    }

    function apagar() {
        if ($this->estado == Estados::encendido){
            $this->estado = Estados::apagado;
        } else {
            echo ("<p>El coche no se puede apagar</p>");
        }
    }

    function repostar($litros) {
        $this->gasolina += $litros;
    }
}