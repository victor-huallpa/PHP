<?php

include('db.php');
include('db2.php');

// registrar tareas

if (isset($_POST['save_task'])) {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ./index.php');
}

if (isset($_POST['registrar'])) {
  $usuario = $_POST['title'];
  $password = $_POST['description'];

  $cargo = 'alumno';
  $privilegio = 'no';
  
  // if(!$result) {
  //   die("Query Failed.");
  // }
  $campos= array();
        
  if($usuario=='' || strlen($usuario)<2 || strpos($usuario,"@")===false)
  {
      array_push($campos, "USUARIO: Es obligatorio con mas de 2 caracteres o no cuenta con @");
  }

  if(strlen($password)<6 || strlen($password)>11)
  {
      array_push($campos, "PASSWORD: No contiene los caracteres suficientes");

  }

  if(count( $campos)> 0){
      echo "<div class='error'>";
      for($i=0; $i < count( $campos); $i ++){
          echo "<li>".$campos[$i]."</li>";
      }
  }
  else{
    $query = "INSERT INTO users (usuario, clave, cargo, privilegio) VALUES ('$usuario', '$password', '$cargo', '$privilegio')";
    $result = mysqli_query($conec, $query);

  }
  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ./index.php');

}

?>
