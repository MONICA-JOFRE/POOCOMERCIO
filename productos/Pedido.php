<?php
require_once ('autoload.php');
class Pedido {
    static protected $npedido=0;
    public $fecha;
    public $usuario;
    public $proveedor;
    public $producto;
    public $cantidad;
    public $total;
   
   function __construct($fecha,$usuario,$proveedor,$producto,$cantidad,$total) {
            $this->id = ++self ::$npedido;
            $this->fecha= $fecha;
            $this->usuario= $usuario;
            $this->proveedor= $proveedor;
            $this->producto= $producto;
            $this->cantidad= $cantidad;
            $this->total= $total;
       }

        function getFecha() {
            return $this->fecha;
        }
        function getUsuario() {
            return $this->usuario;
        }
        function getProveedor() {
            return $this->proveedor;
        }
        function getProducto() {
            return $this->producto;
        }
        function getCantidad() {
            return $this->cantidad;
        }
        function getTotal() {
            return $this->total;
        }
        function setFecha() {
            return $this->fecha;
        }
        function setUsuario() {
            return $this->usuario;
        }
        function setProveedor() {
            return $this->proveedor;
        }
        function setProducto() {
            return $this->producto;
        }
        function setCantidad() {
            return $this->cantidad;
        }
        function setTotal() {
            return $this->total;
        }
        
}