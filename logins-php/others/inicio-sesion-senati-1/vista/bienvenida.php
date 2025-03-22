<?php 
include("../logica/conexion.php");
$con=conectar();



$sql="SELECT *  FROM iniciologin" ;
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <center>
            <p><h2>pagina principal</h2></p>
            <?php 
            include('../logica/paginaprincipal.php');?>
            <br>
            <br>
            <p><h3>datos mostrados</h3></p>
            <table>
           
             <tbody><?php include("../logica/mostrarCV.php"); ?></tbody>
            </table>
        </center>
    </div>
    
</body>
</html>