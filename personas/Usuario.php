<?php
require_once ('autoload.php');

    class Usuario extends Persona{
        static protected $cantidad=0;
        public $clave;
     
        function __construct($nombre, $telefono, $clave)
        {
            parent :: __construct($nombre, $telefono);
            $this->clave = $clave;
            $this->id = ++ self :: $cantidad;
        }
        function getId() {
            return $this->id;
        }
        function getClave() {
            return $this->clave;
        }
        function setClave($clave) {
            $this->clave = $clave;
        }
    }