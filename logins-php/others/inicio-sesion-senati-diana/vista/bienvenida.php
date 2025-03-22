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
            <p><h2>BIENVENIDO INSTRUCTOR</h2></p>
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
      <div class="card card-body">
        <form action="../save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
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
            <td>
              <a href="../edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="../delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div><br><br><br><br>
    
/*tabla de registrar alumnos */
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Usuario</th>
            <th>Clave</th>
            <td>Cargo</td>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include("../logica/conexion5.php");
          $con=tabla();
      
          $sql="SELECT *  FROM iniciologin2 where cargo='alumno'";
          $query=mysqli_query($con,$sql);
              
          ?>

<?php
    while($row=mysqli_fetch_assoc($query)){
?>
    <tr>
        <th><?php  echo $row['id']?></th>
        <th><?php  echo $row['usuario']?></th>
        <th><?php  echo $row['clave']?></th>
        <th><?php  echo $row['cargo']?></th><    
        <td>
              <a href="../edit2.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="../delete_task2.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
        </td>
    </tr>
<?php 
    }
?>
        </tbody>
      </table>
    </div>


  </div>

  
  <div>
    <center>
            <br>
        <p><h2>REGISTRAR ALUMNO</h2></p>
        <p>Coloque su usuario y su contraseña por favor </p>
    <form action="bienvenida.php"  method="post">
        
            <input type="text" name="usuario" placeholder="usuario">
            <br>
       
            <input type="password" name="clave" placeholder="password">
            <br>
            <input type="submit" name="validar" value="registrarse">
            <br>
            <br>
        <?php 
            include('../logica/registrar.php');
            registro2();

        ?>
        </center>
        
        
    </form>
</div>


</main>
<?php require '../includes/footer.php' ?>;
</body>
</html>