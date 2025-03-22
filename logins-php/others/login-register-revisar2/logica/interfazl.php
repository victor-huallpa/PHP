<?php 
    include('conexion.php');
    $con=conectar1();
    session_start();
    $array = $_SESSION['usermane'];

     $time = time();

     $hora=  date("H:i:s", $time);
     echo $hora;

     $entrdaA=$_POST['entradaA'];
     $salida=$_POST['salida'];
     $salidaA=$_POST['salidaA'];

    if(isset($_POST['entrada'])){
        $q="INSERT INTO asistencia VALUES('',$hora,null,null,null,null)";
    }
    if(isset($salidaA)){
        $q="UPDATE asistencia SET hr_al_salida=$hora WHERE '$array'";
    }

    

?>