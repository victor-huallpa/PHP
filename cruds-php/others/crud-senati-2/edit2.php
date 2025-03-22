<?php
include("db2.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM iniciologin2 WHERE id=$id";
  $result = mysqli_query($conec, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['usuario'];
    $description = $row['clave'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['usuario'];
  $description = $_POST['clave'];

  $query = "UPDATE iniciologin2 set usuario = '$title', clave = '$description' WHERE id=$id";
  mysqli_query($conec, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../inicio_secion/vista/bienvenida.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit2.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="usuario" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="clave" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
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
