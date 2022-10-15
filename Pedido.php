<?php
class Pedido {
    static protected $npedido=0;
    public $fecha;
    public $producto;
    public $cantidad;
}
function __construct($fecha,$producto,$cantidad)
        {
            $this->id = ++self ::$npedido;
            $this->fecha= $fecha;
            $this->producto = $producto;
            $this->cantidad = $cantidad;

}

        function getFecha() {
            return $this->fecha;
        }
        function getProducto() {
            return $this->producto;
        }
        function getCantidad() {
            return $this->cantidad;
        }

        
        function setFecha() {
            return $this->fecha;
        }
        function setProducto() {
            return $this->producto;
        }
        function setCantidad() {
          return $this->cantidad;
        }
