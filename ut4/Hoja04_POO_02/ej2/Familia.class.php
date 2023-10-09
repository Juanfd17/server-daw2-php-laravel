<?php
require_once ("Medico.class.php");
class Familia extends Medico {
    private $numPacientes;

    public function __construct($numPacientes, $nombre, $edad, $turno){
        $this->numPacientes = $numPacientes;
        parent::__construct($nombre, $edad, $turno);
    }


    public function getNumPacientes() {
        return $this->numPacientes;
    }

    public function __toString(): string {
        return parent::__toString()." numero de pacientes: ".$this->numPacientes;
    }


}
?>