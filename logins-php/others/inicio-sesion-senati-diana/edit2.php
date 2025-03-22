<?php
include("db2.php");
$usuario = '';
$clave= '';



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM iniciologin2 WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $usuario = $row['usuario'];
    $clave = $row['clave'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $usuario= $_POST['usuario'];
  $clave = $_POST['clave'];

  $query = "UPDATE iniciologin2 set usuario = '$usuario', clave = '$clave' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'actualizacion de tarea satisfactoria';
  $_SESSION['message_type'] = 'error';
  header('Location: vista/bienvenida.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit2.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="usuario" type="text" class="form-control" value="<?php echo $usuario; ?>" placeholder="Update usuario">
        </div>
        <div class="form-group">
        <textarea name="clave" class="form-control" cols="10" rows="1"><?php echo $clave;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
