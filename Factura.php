<?php

class Factura extends Detallefactura{
    static protected $numero=0;
    public $fecha;
    public $total;

        function __construct($fecha,$total){
                parent :: __construct();
                $this->id = ++self :: $numero;
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
}
