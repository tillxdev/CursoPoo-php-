<?php
class persona{
    public $intDpi;//por convención se pone prefijo para identificar el tipo de dato de esa propiedad

    public $strNombre;
    public $intEdad;
    
    function __construct(int $dpi, string $nombre, int $edad){
        $this->intDpi = $dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }

    public function getDatosPersonales(){
        $datos_="
            <h2>DATOS PERSONALES</h2>
            DPI:{$this->intDpi}<br>
            Nombre:{$this->strNombre}<br>
            Edad:{$this->intEdad}<br>
        ";//ojo con esto !
        return $datos_;
    }



}//fin de la clase persona
?>