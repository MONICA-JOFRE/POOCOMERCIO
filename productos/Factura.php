<?php
require_once('autoload.php');
class Factura{
    static protected $numero=0;
    public $fecha;
    public $usuario;
    public $cliente;
    public $producto;
    public $cantidad;
    public $total;



        function __construct($fecha,$usuario,$cliente,$producto,$cantidad,$total){
                $this->id = ++self :: $numero;
                $this->fecha= $fecha; 
                $this->usuario= $usuario;
                $this->cliente= $cliente;
                $this->producto= $producto;
                $this->cantidad= $cantidad; 
                $this->total = $total;
            }
        function getFecha() {
            return $this->fecha;
        }
        function getUsuario() {
            return $this->usuario;
        }
        function getCliente() {
            return $this->cliente;
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
        function setFecha($fecha) {
            $this->fecha = $fecha;
        }
        function setUsuario() {
            return $this->usuario;
        }
        
        function setCliente() {
            return $this->cliente;
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
