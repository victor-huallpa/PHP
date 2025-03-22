<?php 
    require 'conexion.php';
    $conexion=conectar1();

    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $q = "SELECT COUNT(*) as contar FROM iniciologin2 WHERE usuario = '$usuario' and clave = '$clave'";

    $consulta = mysqli_query($conexion,$q);

    $array = mysqli_fetch_array($consulta);

    


    if($array['contar']>0){
        $_SESSION['username'] = $usuario;

        
        $q2 = "SELECT cargo FROM iniciologin2 WHERE usuario = '$usuario' and clave ='$clave' ";
        $consulta2 = mysqli_query($conexion, $q2);
        $array2 = mysqli_fetch_array($consulta2);
        if($array2['cargo'] == 'instructor'){
          header("location: ../vista/bienvenida.php");
        }

        if($array2['cargo'] == 'alumno'){
          header("location: ../vista/bienvenida2.php");
        }
    }else{
      header("location: ../vista/registrarce.php");
        
    }

?>
