<?php
date_default_timezone_set('America/Lima');
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="sistema_asistencia";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>