<?php
class Coche{
    private $matricula;
    private $velocidad;

    public function __construct($matricula, $velocidad){
        $this->matricula = $matricula;
        $this->velocidad = $velocidad;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
        if ($this->velocidad > 120){
            $this->velocidad = 120;
        } elseif ($this->velocidad < 0){
            $this->velocidad = 0;
        }
    }

    public function acelera($cuanto){
        $this->setVelocidad($this->velocidad + $cuanto);
    }

    public function frena($cuanto){
        $this->setVelocidad($this->velocidad - $cuanto);
    }

    public function __toString(){
        return "La matricula es: ".$this->matricula." y la velocidad es de:".$this->velocidad."Kh";
    }
}