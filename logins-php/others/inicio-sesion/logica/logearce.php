<?php
    require 'conexion.php';
    $conexion=conectar1();

    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $q = "SELECT clave  FROM iniciologin2 WHERE usuario = '$usuario' and clave = '$clave'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['clave'] == 'instructor'){
        $_SESSION['usermane'] = $usuario;

        header("location: ../vista/bienvenida.php");
    }
    elseif($array['cargo'] == 'alumno'){
        $_SESSION['usermane'] = $usuario;
        header("location: ../vista/bienvenida2.php");
     }
    else{
        echo 'algo salio mal';
        header("location: ../vista/registrarce.php");
    }

?>
