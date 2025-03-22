<?PHP
//crear un login con base de datos, utilizando clases, herencia, encapsulamiento, html y 
//variables de sesion
class conection{
    private $servidor;
    private $baseDatos;
    private $ingreso;
    protected $conexion;

    function __construct()
    {
        $this->conection();
    }
    private function conection(){
        $this->datosBD();
        try{
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=prueba", $this->baseDatos, $this->ingreso);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'conexion establecida';
        }
        catch(PDOException $error){
            echo 'no se realizo la conexion '.'<br>'.$error;
        }
    }
    private function datosBD(){
        $this->servidor = 'localhost';
        $this->baseDatos = 'vi';
        $this->ingreso = 'vech';
    }
}
class consultas extends conection{
    private $users;
    private $passwords;
    private $sql;
    private $ejecution;
    protected $showUser;

    function __construct($datoU, $datoP)
    {
        parent::__construct();
        $this->users = $datoU;
        $this->passwords = $datoP;
        $this->consulta();
    }

    private function consulta(){
        try{
            $this->sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia";//marcadores de posison ':usuario?
            $this->ejecution = $this->conexion->prepare($this->sql);

            $this->ejecution->bindParam(':usuario',$this->users);//asginamos el valor al parametro
            $this->ejecution->bindParam(':contrasenia',$this->passwords);
            
            $this->ejecution->execute();

            $numFilas = $this->ejecution->rowCount();
            if($numFilas == 1){
                
                $this->starSesion();
            }
            else{
                echo '<br>'.'datos incorrectos';
            }
            // echo 'consulta realizada';
        }
        catch(PDOException $e){
            echo 'error de '. $e->getMessage();
        }

    }
    private function starSesion(){
        session_start();
        $this->showUser = $this->ejecution->fetchAll();
        foreach($this->showUser as $foto){
            $_SESSION['usuario'] = $foto['usuario'];
            echo '<br>'.'sesion iniciada'.'<br>';
            echo 'bienvenido '.$_SESSION['usuario'];
            // echo ' <input type="submit" value="cerrar sesion">';
        }
    }
    public static function closeSesion(){
        session_start();
        session_destroy();
        echo 'sesion cerrada '.$_SESSION['usuario'];
    }


}
// $datoU = $_POST['usuario'];
// $datoP = $_POST['contrasenia'];
// $conec = new consultas($datoU,$datoP);
if(isset($_POST['usuario']) && isset($_POST['contrasenia']) && isset($_POST['enviar'])) {
    $datoU = $_POST['usuario'];
    $datoP = $_POST['contrasenia'];
    $conec = new consultas($datoU,$datoP);
}
if(isset($_POST['cerrar'])){
    consultas::closeSesion();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="ejercicioPractico4.php" method="post">
        Correo:
        <input type="text" name="usuario" id="">
        <br>
        Contraseña:
        <input type="text" name="contrasenia" id="">
        <br>
        <input type="submit" value="logearse" name="enviar">
    </form>
    <form action="ejercicioPractico4.php" method="post">
        <input type="submit" value="cerrar sesion" name="cerrar">
    </form>
</body>
</html>