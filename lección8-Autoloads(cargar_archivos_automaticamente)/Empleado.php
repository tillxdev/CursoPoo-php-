<?php
//require_once("classPersona.php");
require_once("autoload.php");
//esto lo que hace es que Empleado pueda heredar los atributos y metodos de la clase Persona

class Empleado extends Persona{
    protected $strPuesto;
    function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi,$nombre, $edad);//estamos utilizando el constructor de persona.

    }
    public function setPuesto(string $puesto)
    {
        $this->strPuesto = $puesto;
    }
    public function getPuesto(): string
    {
        return $this->strPuesto;
    }
}//fin de la clase persona


?>