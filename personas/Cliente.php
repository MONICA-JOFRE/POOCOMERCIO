<?php
require_once ('autoload.php');


    class Cliente extends Persona{
        static protected $cantidad=0;
        public $cuit;
        public $resp;

        function __construct($nombre, $telefono, $cuit, $resp)
        {
            parent :: __construct($nombre, $telefono);
            $this->cuit = $cuit;
            $this->resp = $resp;
            $this->id = ++ self :: $cantidad;
        }

        function getCuil() {
            return $this->cuil;
        }
        function getResp() {
            return $this->resp;
        }
    }