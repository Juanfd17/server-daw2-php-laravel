<?php
require_once ("Turno.Enum.php");
abstract class Medico{
    private $nombre;
    private $edad;
    private $turno = Turno::class;

    public function __construct($nombre, $edad, $turno){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function getTurno(): string
    {
        return $this->turno->value;
    }

    public function setTurno(string $turno): void
    {
        $this->turno = $turno;
    }

    public function __toString(): string{
        return "Nombre: ".$this->nombre." Edad: ".$this->edad." Turno: ".$this->turno->value;
    }
}
?>