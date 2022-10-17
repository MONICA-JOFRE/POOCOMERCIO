<?php
require_once ('autoload.php');
use \productos\Producto;

class Detallepedido {
    public $cantidad; 

    function __construct($cantidad){
        $this->cantidad = cantidad;
        }

        function getCantidad() {
            return $this->cantidad;
        }
        
        function setCantidad() {
            return $this->cantidad;
        }
}