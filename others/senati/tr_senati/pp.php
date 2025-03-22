<?php
    include('logical/conexion.php');
    $con=conectar();
    $c = "SELECT id FROM usuarios WHERE apellido='Quispe Mamani'";
    $consulta = mysqli_query($con,$c);
    $lista = mysqli_fetch_array($consulta);
     
    echo $lista;
?>