<?php
session_start();
require_once "consultas.php";
class Login{
    //datos usuario
    private $usu;
    private $passUsu;
    private $consu;
    private $consu1;

    //verifcar
    private $conU;
    private $conP;

    //array vericar datos
    private $datosUser;
    //mensajes
    public $campoU;
    public $campoP;
    function __construct()
    {
        $this->usu = $_POST['usuario'];
        $this->passUsu = $_POST['contrasenia'];
        $this->datosUser = [$this->usu, $this->passUsu];
        $this->consu = new Consultas();
        $this->consu->consultaUser($this->datosUser);
        $this->consu1 = $this->consu->consultaUser($this->datosUser);
    }
    private function verificarUsuario(){
        $this->conU = $this->consu1[0];
        $this->conP = $this->consu1[1];
        if($this->conU === $this->usu && $this->conP === $this->passUsu){
            // $_SESSION['contrasenia']=$this->conP;
            $_SESSION['usuario']=$this->conU;
            header('location:index.php');
        }elseif($this->conU !== $this->usu && $this->conP !== $this->passUsu){
            echo "<script> alert('usuario o contraseña incorrecto');</script>";
        }
    }
    public function verficarCampos(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['loger']) && $_POST['loger'] === 'loger') {
                if (empty($_POST['usuario'])) {
                    $this->campoU = 'llenar campo usuario <br>';
                }
                if (empty($_POST['contrasenia'])) {
                    $this->campoP = 'llenar campo contraseña';
                }
                if (empty($this->campoU) && empty($this->campoP)) {
                    $this->verificarUsuario();
                }
            }
        }elseif($_SERVER['REQUEST_METHOD'] !== 'POST' && $_SERVER['REQUEST_METHOD'] === ''){
            echo 'no se envio nada aun';
        }
    }
}
if(isset($_POST['loger']) && $_POST['loger'] === 'loger'){
    $usuario = $_POST['usuario'] ?? '';
    $contrasenia = $_POST['contrasenia'] ?? '';
    $verificar = new Login();
    $verificar->verficarCampos();
}
?>


<!doctype html>
<html lang="en">
    <head>
        <title>login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" />
    </head>
    <body>
        <div class="container">
        <div class="row justify-content-center align-items-center g-2"       >
            <div class="col-4" ></div>
            <div class="col-4" >
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">LOGIN</h4>
                    <form action="login.php" method="post">
                        Usuario:<?php echo $verificar->campoU?>
                        <input class="form-control" type="text" name="usuario" id=""><br>
                        Contraseña: <?php echo $verificar->campoP?>
                        <input class="form-control" type="password" name="contrasenia" id=""><br>
                        <button class="btn btn-success" type="submit" value="loger" name="loger">Ingresar a Portafolio</button>
                    </form>
                </div>
            </div>
            </div>
            <div class="col-4" ></div>
        </div>
        </div>
    </body>
    
</html>
