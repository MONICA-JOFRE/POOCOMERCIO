<?php
require_once ('Persona.php');

    class Usuario extends Persona{
        static protected $cantidad=0;
        public $clave;
     
        function __construct($nombre, $telefono, $clave)
        {
            parent :: __construct($nombre, $telefono);
            $this->clave = $clave;
            $this->id = ++ self :: $cantidad;
        }

        function getClave() {
            return $this->clave;
        }
       
    }