<?php
require_once ('autoload.php');


    class Cliente extends Persona{
        static protected $cantidad=0;
        public $cuil;
        public $resp;

        function __construct($nombre, $telefono, $cuil, $resp)
        {
            parent :: __construct($nombre, $telefono);
            $this->cuil = $cuil;
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