<?php
namespace controllers;//nombre de espacio
//require_once("../models/Persona.php");
//require_once("../autoload.php");
use models\Persona;

//esto lo que hace es que Empleado pueda heredar los atributos y metodos de la clase Persona

class Cliente extends Persona{
    protected $fltCredito;
    function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi,$nombre, $edad);//estamos utilizando el constructor de persona.

    }
    public function setCredito(string $credito)
    {
        $this->fltCredito = $credito;
    }
    public function getCredito(): string
    {
        return $this->fltCredito;
    }
}//fin de la clase persona


?>