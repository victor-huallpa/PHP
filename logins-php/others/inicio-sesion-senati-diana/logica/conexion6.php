<?php 
function coneccion6(){ 
    $host="localhost";
    $user="root";
    $pass="";
    $bd="senati_alumno";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);
    
    return $con;
}
?>