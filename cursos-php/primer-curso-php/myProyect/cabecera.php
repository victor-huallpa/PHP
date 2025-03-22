<?php
require_once "consultas.php";
session_start();
class SesionStart{
    private $velidarAccion;
    public $btnSesion;
    public $usuario;
    
    public function verificarSesion(){
        if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
            $this->usuario = 'Bienvenido '.$_SESSION['usuario'];
            $this->btnSesion = 'Cerrar';
            $accionBtn = $_GET['accion'];
            $this->accionSesion($accionBtn);
        }else{
            $accionBtn = $_GET['accion'];
            $this->btnSesion = 'Iniciar';
            $this->accionSinSesion($accionBtn);
        }
    }
    private function accionSesion($accionBtn){
        if($accionBtn === 'inicio'){
            header('location:index.php');
        }elseif($accionBtn === 'ejercicios'){
            header('location:ejerciciosView.php');
        }elseif($accionBtn === 'administrarP'){
            header('location:read.php');
        }elseif($accionBtn === 'administrarE'){
            header('location:subirEView.php');
        }elseif($accionBtn === $this->btnSesion){
            header('location:cerrar.php');
        }
    }

    private function accionSinSesion($accionBtn){
        if($accionBtn === 'inicio'){
            header('location:index.php');
        }elseif($accionBtn === 'ejercicios'){
            header('location:ejerciciosView.php');
        }elseif($accionBtn === 'administrarP'){
            echo "<script>alert('requieres iniciar sesion');</script>";
            // header('location:read.php');
        }elseif($accionBtn === 'administrarE'){
            echo "<script>alert('requieres iniciar sesion');</script>";
            // header('location:subirEView.php');
        }elseif($accionBtn === $this->btnSesion){
            header('location:cerrar.php');
        }
    }
}

// class Sesion {
//     public $btnSesion;
//     public $msjUsuario;

//     function __construct() {
//         if (isset($_SESSION['usuario'])) {
//             $this->msjUsuario = 'bienvenido ' . $_SESSION['usuario'];
//             $this->btnSesion = 'Cerrar';
//             if (isset($_GET['accion'])) {
//                 $accion = $_GET['accion'];
//                 if ($accion == 'Cerrar') {
//                     $this->cerrarSesion();
//                 } elseif ($accion == 'portafolio') {
//                     $this->portafolioBtn();
//                 } elseif ($accion == 'ejercicios') {
//                     header('Location: ejerciciosView.php');
//                     exit();
//                 } elseif ($accion == 'ejerciciosAdministrar') {
//                     header('Location: subirEView.php');
//                     exit();
//                 }
//             }
//         } else {
//             $this->btnSesion = 'Iniciar';
//             if (isset($_GET['accion'])) {
//                 $accion = $_GET['accion'];
//                 if ($accion == 'Iniciar') {
//                     $this->iniciarSesion();
//                 } elseif ($accion == 'portafolio' || $accion == 'ejerciciosAdministrar') {
//                     echo "<script>alert('requieres iniciar sesion');</script>";
//                     header('Location: index.php');
//                     exit();
//                 } elseif ($accion == 'ejercicios') {
//                     header('Location: ejerciciosView.php');
//                     exit();
//                 }
//             }
//         }
//     }

//     private function iniciarSesion() {
//         header('Location: login.php');
//         exit();
//     }

//     private function cerrarSesion() {
//         header('Location: cerrar.php');
//         exit();
//     }

//     private function portafolioBtn() {
//         header('Location: read.php');
//         exit();
//     }
// }

$objSesionStart = new SesionStart();
$objSesionStart->verificarSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resource/css/styleHeader.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>WEB SITE | PORTAFOLIO</title>
</head>
<body>
<header>
    <div class="nav-links">
        <a class="btn-inicio" href="?accion=inicio">Inicio</a>
        <a href="?accion=ejercicios">Ejercicios</a>
        <a href="?accion=administrarP">Administrar Portafolio</a>
        <a href="?accion=administrarE">Administrar Ejercicios</a>
    </div>
    <div class="user-session">
        <span class="user-message"><?php echo htmlspecialchars($objSesionStart->usuario);?></span>
        <a class="btn-sesion" href="?accion=<?php echo htmlspecialchars($objSesionStart->btnSesion);?>">
            <?php echo htmlspecialchars($objSesionStart->btnSesion);?> Sesión
        </a>
    </div>
</header>
<br><br><br><br>
<label for="customRange1" class="form-label"></label>
<input type="range" class="form-range" id="customRange1">
<div class="container">
