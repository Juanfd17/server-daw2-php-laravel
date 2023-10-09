<?php
require_once ("Medico.class.php");
class Urgencia extends Medico {
    private $unidad;

    public function __construct($unidad, $nombre, $edad, $turno){
        $this->unidad = $unidad;
        parent::__construct($nombre, $edad, $turno);
    }

    public function __toString(): string {
        return parent::__toString()." unidad: ".$this->unidad;
    }


}

?>