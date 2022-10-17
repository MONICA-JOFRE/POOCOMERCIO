<?php
require_once ('Detallepedido.php');

use \personas\Proveedor;
class Pedido extends Detallepedido {
    static protected $npedido=0;
    public $fecha;
    public $producto;
    


function __construct($cantidad,$fecha,$producto) {
    parent :: __construct ($cantidad);
            $this->id = ++self ::$npedido;
            $this->fecha= $fecha;
            $this->producto = $producto;
            
           

}

        function getFecha() {
            return $this->fecha;
        }
        function getProducto() {
            return $this->producto;
        }
       
        
        function setFecha() {
            return $this->fecha;
        }
        function setProducto() {
            return $this->producto;
        }
        
    }