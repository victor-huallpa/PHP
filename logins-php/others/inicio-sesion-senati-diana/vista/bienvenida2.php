<?php 
include("../logica/conexion.php");

$con=conectar();

$sql="SELECT *  FROM iniciologin" ;
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
   
?>
<?php include("../db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/style.css">
</head>
<body>
<?php require '../includes/header.php' ?>;
    

<main class="container p-4">
<div>
        
        <center>
            <p><h4>PAGINA PRINCIPAL</h4></p>
            <p><h2>BIENVENIDO ESTUDIANTE</h2></p>
            <?php 
            include('../logica/paginaprincipal.php');?>
            <br>
            <br>
            <p><h3>datos mostrados</h3></p>
            <table>
           
    
                /*<?php include("../logica/mostrarCV.php"); ?>*/
            </table>
        </center>
    </div> 
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php require '../includes/footer.php' ?>;
</body>
</html>