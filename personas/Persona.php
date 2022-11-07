<?php
require_once ('autoload.php');

   class Persona {
        static protected $cantidad=0;
        public $nombre;
        public $telefono;

        function __construct($nombre, $telefono)
        {
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->id = ++ self :: $cantidad;
        }
        function getNombre() {
            return $this->nombre;
        }
        function getTelefono() {
            return $this->telefono;
            
        } function setNombre($nombre) {
            $this->nombre;
        }
        function setTelefono($telefono) {
            $this->telefono= $telefono;
        }

    }

