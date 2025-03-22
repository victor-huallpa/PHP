<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="senati_alumno";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
function conectar1()
{
    $host = 'localhost';
    $usuario = 'root';
    $clave = '';
    $bd = 'senati_alumno';
    $conexion = mysqli_connect($host,$usuario,$clave,$bd);
    return $conexion;
}

?>