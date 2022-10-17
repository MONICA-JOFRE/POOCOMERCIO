<?php
require_once ('Producto.php');
class Detallepedido  extends Producto{
    public $cantidad; 

function __construct($nombre, $marca, $precio, $cantidad){
    parent :: __construct ($nombre, $marca, $precio);
        $this->cantidad= cantidad;
        }
       
        function getCantidad() {
            return $this->cantidad;
        }
        
        function setCantidad() {
            return $this->cantidad;
        }
    }