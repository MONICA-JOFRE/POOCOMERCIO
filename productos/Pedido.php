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
   
   function __construct($fecha,$usuario,$proveedor,$producto,$cantidad,$total)
   {
            $this->id = ++self ::$npedido;
            $this->fecha= $fecha;
            $this->usuario= $usuario;
            $this->proveedor= $proveedor;
            $this->producto= $producto;
            $this->cantidad= $cantidad;
            $this->total= $total;
       }
        function getId() {
            return $this->id;
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
        function getTotal($total) {
            $this->total= $total;
        }
        function setFecha($fecha) {
            $this->fecha= $fecha;
        }
        function setUsuario($usuario) {
            $this->usuario= $usuario;
        }
        function setProveedor($proveedor) {
            $this->proveedor= $proveedor;
        }
        function setProducto($producto) {
            $this->producto= $producto;
        }
        function setCantidad($cantidad) {
            $this->cantidad= $cantidad;
        }
        function setTotal($total) {
            $this->total= $total;
        }
        
}