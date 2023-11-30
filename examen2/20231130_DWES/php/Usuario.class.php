<?php
class Usuario {
    private $id;
    private $dni;
    private $nombre;
    private $apellidos;
    private $imagen;

    public function __construct($id, $dni, $nombre, $apellidos, $imagen){
        $this->id = $id;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->imagen = $imagen;
    }

    public function getId(){
        return $this->id;
    }
    public function getDni(){
        return $this->dni;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getImagen(){
        return $this->imagen;
    }
}