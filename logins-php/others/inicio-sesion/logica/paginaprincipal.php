<?php 
session_start();
$usuario = $_SESSION['usermane'].'senati.pe';

if(!isset($usuario)){
    header("location: login.php");
}else{
    echo "<h1>  $usuario</h1>";

    echo "<a href='../vista/cerrar.php'>cerrar secion</a>";
}



?>