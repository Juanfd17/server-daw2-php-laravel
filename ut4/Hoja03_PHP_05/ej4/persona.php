<?php

class persona{
    private $nombre;
    private $img;

    public function __construct($nombre, $img){
        $this->nombre = $nombre;
        $this->img = $img;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getImg(){
        return $this->img;
    }

    public function __toString(){
        return "<tr><td>".$this->nombre."</td><td><img src='$this->img'></td></tr>";
    }


}