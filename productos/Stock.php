<?php

use \productos\Factura;
use  \productos\Pedido;
/* interface movimientoPedido{
    public function sumarPedido($productos);
}
interface movimientoFactura{
    public function restarFactura($productos);
} */
  interface Mostrable {
    public function obtenerCantidad($pedido, $factura);
    /* return $this->producto  = $pedido - $factura;  */
    
}; 
Class Stock implements Mostrable{
    public $cantidad;

   public function obtenerCantidad($pedido, $factura){;
    return $this -> producto = $this->pedido - $this->factura; 
    }
    function setStock() {
    $this->cantidad = $cantidad;
   
    } 
    function getStock() {
        return $this->cantidad;
    }
}
//hay o no hay stock?
//que me muestre el total?