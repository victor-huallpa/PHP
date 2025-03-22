<?php

  include("db2.php");

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM iniciologin2 WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header('Location: vista/bienvenida.php');
  }
  
?>