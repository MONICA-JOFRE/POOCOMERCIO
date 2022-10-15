<?php

class Factura {
    static protected $numero=0;
    public $fecha;
    public $total;
}
function __construct($nombre, $fecha,$total)
        {
            $this->id = ++self ::$numero;
            $this->fecha= $fecha;
            $this->total = $total;

}

        function getFecha() {
            return $this->fecha;
        }
        function getTotal() {
            return $this->total;
        }
        
        function setFecha() {
            return $this->fecha;
        }
        function setTotal() {
            return $this->total;
        }
    

