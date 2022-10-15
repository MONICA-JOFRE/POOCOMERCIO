<?php
require_once ('Producto');
class Detallefactura  extends Producto{
    public $cantidad; 

}
function __construct($cantidad){
    parent :: __construct ($nombre, $marca, $precio);
        $this->cantidad= cantidad;
        }
       
        function getCantidad() {
            return $this->cantidad;
        }
        
        function setCantidad() {
            return $this->cantidad;
        }