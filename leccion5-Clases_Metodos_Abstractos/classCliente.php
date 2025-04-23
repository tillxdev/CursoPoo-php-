<?php
require_once("classPersona.php");

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


    public function getDatosPersonales(){
        $datos_="
            <h2>DATOS PERSONALES DE CLIENTE</h2>
            DPI:{$this->intDpi}<br>
            Nombre:{$this->strNombre}<br>
            Edad:{$this->intEdad}<br>
            Credito:{$this->fltCredito} dolares
        ";//ojo con esto !
        return $datos_;
    }

    public function setMensaje(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function getMensaje(): string{
        return $this->mensaje." atte. Cliente";
    }
}//fin de la clase persona


?>