<?php
class Precipitacion {
    private $mes;
    private $valor;

    public function __construct($mes, $valor) {
        $this->mes = $mes;
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }
}