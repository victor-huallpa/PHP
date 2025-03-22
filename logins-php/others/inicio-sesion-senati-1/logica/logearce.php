<?php 
    require 'conexion.php';
    $conexion=conectar1();

    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $q = "SELECT COUNT(*) as contar FROM iniciologin WHERE usuario = '$usuario' and clave = '$clave'";

    $consulta = mysqli_query($conexion,$q);

    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['username'] = $usuario;
        header("location: ../vista/bienvenida.php");
    }else{
        echo "NO EXISTE EL USUARIO";
        echo"<br>";
        echo "<a href='../vista/login.php'>atras</a>";
        
    }

?>
