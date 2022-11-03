<?php
require_once ('autoload.php');


    class Cliente extends Persona{
        static protected $num=0;
        static protected $cantidad=0;
        public $cuil;
        public $resp;

        function __construct($nombre, $telefono, $cuil, $resp)
        {
            $this->id = ++ self :: $num;
            parent :: __construct($nombre, $telefono);
            $this->cuil = $cuil;
            $this->resp = $resp;
            $this->id = ++ self :: $cantidad;
        }
        function getId() {
            return $this->id;
        }
        function getCuil() {
            return $this->cuil;
        }
        function getResp() {
            return $this->resp;
        }
        function setCuil() {
            return $this->cuil;
        }
        function setResp() {
            return $this->resp;
        } 
    }