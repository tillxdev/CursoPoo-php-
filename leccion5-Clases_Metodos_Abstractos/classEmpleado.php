<?php
require_once("classPersona.php");

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


    //aqui ya estamos definiendo el metodo que antes era abstracto
    public function getDatosPersonales(){
        $datos_="
            <h2>DATOS PERSONALES DE EMPLEADO</h2>
            DPI:{$this->intDpi}<br>
            Nombre:{$this->strNombre}<br>
            Edad:{$this->intEdad}<br>
        ";//ojo con esto !
        return $datos_;
    }
    public function setMensaje(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function getMensaje(): string{
        return $this->mensaje." atte.El Empleado";
    }
}//fin de la clase persona


?>