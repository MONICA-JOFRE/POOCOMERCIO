<?php
require_once ('autoload.php');

use \personas\Proveedor;
use \personas\Usuario;


class Pedido {
    static protected $npedido=0;
    public $fecha;
   
   function __construct($fecha,$producto) {
            $this->id = ++self ::$npedido;
            $this->fecha= $fecha;
       }

        function getFecha() {
            return $this->fecha;
        }
        function setFecha() {
            return $this->fecha;
        }
        
}