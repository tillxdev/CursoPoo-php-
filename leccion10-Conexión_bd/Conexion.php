<?php
class Conexion {
    // Propiedades de la clase
    private $host = "db"; // Nombre del host de la base de datos (nombre del servicio en Docker)
    private $user = "root"; // Usuario de la base de datos
    private $password = "test"; // Contraseña del usuario
    private $db = "db_tiendavirtual"; // Nombre de la base de datos a la que se conecta
    private $conect; // Variable para almacenar la conexión PDO

    public function __construct() {
        // Cadena de conexión para PDO
        $connectionString = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
        try {
            // Intenta establecer una conexión usando PDO
            $this->conect = new PDO($connectionString, $this->user, $this->password);
            // Configura el modo de error de PDO para lanzar excepciones
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Detectar errores
            echo "Conexión exitosa"; // Mensaje si la conexión es exitosa
        } catch (Exception $e) {
            // Si hay un error al conectar
            $this->conect = "Error de conexión"; // Mensaje de error en la conexión
            echo "Error: " . $e->getMessage(); // Muestra el mensaje de error
        }
    }
}

// Instancia de la clase
$conect = new Conexion(); // Crea un nuevo objeto de la clase Conexion y ejecuta el constructor
?>
