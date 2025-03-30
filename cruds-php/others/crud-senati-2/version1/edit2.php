<?php
include("db2.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM users WHERE id=$id";
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

  $query = "UPDATE users set usuario = '$title', clave = '$description' WHERE id=$id";
  mysqli_query($conec, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ./index.php');
}

?>
<?php include('./includes/header.php'); ?>

<?php include('./includes/footer.php'); ?>
