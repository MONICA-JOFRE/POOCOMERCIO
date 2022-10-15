<?php

class Factura extends Detallefactura {
    static protected $numero=0;
    public $fecha;
    public $total;
}
function __construct($nombre, $fecha,$total){
    parenth :: __construct($cantidad);
            $this->id = ++self ::$numero;
            $this->fecha= $fecha;
            $this->total = $total;
            $this ->nombre=$nombre;

}

        function getFecha() {
            return $this->fecha;
        }
        function getTotal() {
            return $this->total;
        } 
        function getNombre() {
            return $this->nombre;
        }
        
        function setNombre() {
            return $this->nombre;
        }
        

        function setFecha() {
            return $this->fecha;
        }
        function setTotal() {
            return $this->total;
        }
    

