<?php 
include("../logica/conexion.php");
$con=conectar();



$sql="SELECT *  FROM iniciologin2" ;
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
   
?>
<?php include('../../crud2/includes/header.php'); ?>
    <div>
        <center>
            <p><h2>pagina principal</h2></p>
            <h1>BIENVENIDO ALUMNO</h1>
            <?php 
            include('../logica/paginaprincipal.php');?>
            <br>
            <br>
            <h2>TABLA DE TAREAS</h2>
          
        </center>
        <br>
    <?php include('../../crud2/crud2.php'); ?>

    </div>
    
    <?php include('../../crud2/includes/footer.php'); ?>