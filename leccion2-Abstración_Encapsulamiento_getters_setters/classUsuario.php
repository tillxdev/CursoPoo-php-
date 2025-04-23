<?php
//abstracción y modificadores de acceso
class Usuario{

    private $strNombre;
    private $strEmail;
    public $strTipo;
    private $strClave;
    private $fechaRegistro;
    static $strEstado="Activo";//le pertenece a la clase no al objeto


    //Constructor
    function __construct(string $nombre, string $email, string $tipo) {
        $this->strNombre = $nombre;
        $this->strEmail = $email;   
        $this->strTipo = $tipo;
        $this ->strClave = rand();
        $this ->fechaRegistro = date('Y-m-d H:m:s');
    }

    //getters and setters para manejar los private  
    public function getNombre() {
        return $this->strNombre;
    }
    public function getEmail() {
        return $this->strEmail;
    }

    public function getPerfil() {
        echo "Datos del usuario <br>";
        echo "Nombre: ".$this->strNombre."<br>";
        echo "Email: ".$this->strEmail."<br>";
        echo "Fecha de registro: ".$this->fechaRegistro."<br>";
        echo "Estado: ".self::$strEstado."<br>";//self es para metodos y propiedades estaticos
        echo "Clave: ".$this->strClave."<br>";
    }

    public function setCambiarClave(string $pass) {
        $this->strClave = $pass;
    }



}//fin clase usuario    


?>