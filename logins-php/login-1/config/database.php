<?php
class Database {
    // Variable para almacenar la instancia de PDO
    private $connection;
    private static $instance = null;
    
    // Variables de conexión a la base de datos
    private $host = 'localhost';
    private $dbname = 'login';
    private $username = 'vi';
    private $password = 'vech';
    
    // Constructor privado para realizar la conexión a la base de datos
    private function __construct() {
        try {
            // Crear una nueva conexión PDO
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Configurar PDO para manejar errores
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo'conexion exitoza';
        } catch (PDOException $e) {
            // Registrar el error en un archivo de log y no mostrar detalles en producción
            error_log("Error de conexión a la base de datos: " . $e->getMessage());
            die("Error al conectar a la base de datos. Intente más tarde.");
        }
    }
    
    // Método estático para obtener la única instancia de la clase
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    // Método para obtener la conexión PDO
    public function getConnection() {
        return $this->connection;
    }
    
    // Evitar la clonación de la instancia
    private function __clone() {}
    
    // Evitar la deserialización de la instancia
    private function __wakeup() {}
}

// Obtener la conexión de la base de datos
// $db = Database::getInstance()->getConnection();
?>
