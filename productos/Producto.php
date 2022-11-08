<?php
require_once('autoload.php');
class Producto{
    static protected $num=0;
    public $nombre;
    public $marca;
    public $cantidad;
    public $precio;

    function __construct($nombre, $marca,$cantidad, $precio)
    {
        $this->id = ++ self :: $num;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->cantidad = $cantidad;
        $this->precio= $precio;   
    }

    function getId() {
        return $this->id;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getMarca() {
        return $this->marca;
    }
    function getCantidad() {
        return $this->cantidad;
    }
    function getPrecio() {
        return $this->precio;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function setMarca($marca) {
        $this->marca= $marca;
    }
    function setCantidad($cantidad) {
        $this->cantidad= $cantidad;
    }
    function setPrecio($precio) {
        $this->precio = $precio;
    } 
}




