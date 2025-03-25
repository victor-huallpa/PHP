<?php
    namespace app\models;
    include_once __DIR__ . '/../../config/env.php';
    use PDO,PDOException,Exception;
    class dbModel{
        //atributos/propiedades de conexion
        private $host;
        private $db;
        private $user;
        private $pass;
        //atributo/propiedade de instancia singleton
        private static $instancia;
        //atributo/propiedade de conexion
        private $conection;

        //constructor privado
        private function __construct(){
            $this->host = DB_HOST;
            $this->db = DB_DATABASE;
            $this->user = DB_USERNAME;
            $this->pass = DB_USERPASS;
            $this->conect();//INICIAR CONECCION
        }
        //metodo singleton "inicia la instancia"
        public static function getInstance(){
            if(self::$instancia === null){
                self::$instancia = new self();//new self es lo mismo que llamar a la clase eh inicialice el constructor pero con diferencia que es mas flexible al cambio del nombre de la clase
            }
            return self::$instancia;
        }
        //metodo de conexion
        private function conect(){
            try{
                $this->conection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
                //majo de erros pdo
                $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //CARECTARES UTF8
                $this->conection->exec("SET CHARACTER SET utf8");
                // echo 'conexion exitosa';
            }catch(PDOException $e){
                //regsitra el error en el log
                error_log("Error al conectar a la base de datos: ". $e->getMessage());
                //lanzar la ecepcion con un mensaje personalizado
                // throw new Exception("Error al conectar a la base de datos");
                //lanzar la ecepcion
                throw new Exception("Error al conectar a la base de datos" . $e->getMessage());
            }
        }
        //metodo para obtener la conexion
        public function getConect(){
            return $this->conection;
        }   
    }
    // $db = dbModel::getInstance();
    // $conection = $db->getConect();