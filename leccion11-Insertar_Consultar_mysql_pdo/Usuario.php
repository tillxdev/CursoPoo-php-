<?php
    require_once("autoload.php");
class Usuario extends Conexion {
    private $strNombre; // Almacena el nombre del usuario.
    private $intTelefono; // Almacena el número de teléfono del usuario.
    private $strEmail; // Almacena el email del usuario.
    private $conexion; // Instancia de la clase Conexion para manejar la base de datos.

    // Constructor que inicializa la conexión a la base de datos.
    public function __construct() {
        $this->conexion = new Conexion(); // Se crea una nueva instancia de la clase Conexion.
        $this ->conexion =$this->conexion ->connect() ;
    }

    // Método para insertar un usuario en la base de datos.
    public function insertUsuario(string $nombre, int $telefono, string $email) {
        $this->strNombre = $nombre; // Asigna el valor del nombre del usuario.
        $this->intTelefono = $telefono; // Asigna el valor del teléfono del usuario.
        $this->strEmail = $email; // Asigna el valor del email del usuario.

        // Consulta SQL para insertar un nuevo registro en la tabla `usuario`.
        $sql = "INSERT INTO usuario(nombre, telefono, email) VALUES (?, ?, ?)";

        // Prepara la consulta para ser ejecutada.
        $insert = $this->conexion->prepare($sql);

        // Asocia los datos del usuario a los parámetros de la consulta.
        $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);

        // Ejecuta la consulta con los datos proporcionados.
        $resInsert = $insert->execute($arrData);

        // Obtiene el ID del último registro insertado.
        $idInsert = $this->conexion->lastInsertId();

        // Retorna el ID del nuevo usuario insertado.
        return $idInsert;
    }

    //metodo para extraer información
    public function getUsuarios() {
        // Consulta SQL para insertar un nuevo registro en la tabla `usuario`.
        $sql = "SELECT * FROM usuario";
        $execute=$this->conexion->query( $sql );
        $request=$execute ->fetchAll(PDO::FETCH_ASSOC);
        return $request;
    }

}//fin de la clase conexion


?>