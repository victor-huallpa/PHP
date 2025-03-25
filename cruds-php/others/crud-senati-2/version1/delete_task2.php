<?php

include("db2.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM users WHERE id = $id";
  $result = mysqli_query($conec, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ./index.php');}

?>