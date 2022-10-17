<?php
require_once('autoload.php');
class Producto{
    static protected $num=0;
    public $nombre;
    public $marca;
    public $precio;

    function __construct($nombre, $marca, $precio)
    {
        $this->id = ++ self :: $num;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio= $precio;   
    }

    function getNombre() {
        return $this->nombre;
    }
    function getMarca() {
        return $this->marca;
    }
    function getPrecio() {
        return $this->precio;
    }
    function setNombre() {
        return $this->nombre;
    }
    function setMarca() {
        return $this->marca;
    }
    function setPrecio() {
        return $this->precio;
    } 
}




