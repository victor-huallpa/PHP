<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$lista=array();

if($usuario=='' || strpos($usuario,'@')===false){
    array_push($lista,'escribio mal el usuario o no se encuentra en la base de datos');
}
if($clave=='' || $usuario<6){
    array_push($lista,'escribio mal el su contraseña o no se encuentra en la base de datos');
}
if(count( $lista)> 0){
    echo "<div class='error'>";
    for($i=0; $i < count( $lista); $i ++){
        echo "<li>".$lista[$i]."</li>";
        echo 'en caso no contar con una cuenta le recomendamos que se registre';

    }
}
else{
    include("conexion.php");
    $con=conectar1();
    $q="SELECT * FROM registro WHERE usuario='$usuario' and clave='$clave'";
    $consulta= mysqli_query($con,$q);

    $q2="SELECT id_personal FROM personal WHERE correo='$usuario'";
    $consulta2= mysqli_query($con,$q2);
    $array = mysqli_fetch_array($consulta2);

    if($consulta){
        $_SESSION['usermane'] = $array;
        header("location: ../vista/interfaz.php");
    }
    else{
        echo'algo salio mal';
    }
}
?>