<?php
//conection database
class conexion{
    private $servidor;
    private $userDB;
    private $userPass;
    private $nameDB;
    private $conectado;
    private static $conectado2;
    
    private static $starConstructor = null;

     private function __construct()
    {
        $this->servidor='localhost';
        $this->userDB='vi';
        $this->userPass='vech';
        $this->nameDB='prueba';
        // $this->conectado='';
        $this->conectar();
    }
    public static function startConection(){
        if(self::$starConstructor === null){
            self::$starConstructor = new self();
        }
        return self::$starConstructor;
    }

    private function conectar(){
        try{
            $this->conectado = new PDO("mysql:host=$this->servidor;dbname=$this->nameDB", $this->userDB, $this->userPass);
            $this->conectado->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'conexion establecida';
        }catch(PDOException $error){
            echo 'conexion fallida <br>-'.$error;
        }
    }
    public function showConection(){
        return $this->conectado;
    }
}
?>