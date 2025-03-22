<?php
function coneccion(){ 
    $host="localhost";
    $user="root";
    $pass="";
    $bd="senati_alumno";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);
    
    return $con;
}

function tabla(){
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'senati_alumno'
      ) or die(mysqli_erro($mysqli));
      return $conn;

}

?>