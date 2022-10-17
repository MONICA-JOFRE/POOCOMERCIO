<?php
require_once ('Persona.php');

class Proveedor extends Persona{
    static protected $cantidad=0;
    public $id;
    public $empresa;
    
    function __construct($nombre, $telefono, $empresa)
    {
        parent :: __construct($nombre, $telefono);
        $this->empresa = $empresa;
        $this->id = ++self::$cantidad;
    }

    function getEmpresa() {
        return $this->empresa;
    }
 
   


}