<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/style.css">
    <title>Document</title>
</head>
<body>
<?php require '../recursos/header.php' ?>
<div>
    <center>
            <br>
        <p><h2>REGISTRARSE</h2></p>
        <p>Coloque su usuario y su contraseña por favor </p>
    <form action="registrarce.php" action="../logica/insertar.php" method="post">
        
            <input type="text" name="usuario" placeholder="usuario">
            <br>
       
            <input type="password" name="clave" placeholder="password">
            <p>Con privilegios</p>

            Seleccione check si solo si es instructor: <input type="checkbox" name="yes"><br>
            <br>
            <input type="submit" name="validar" value="registrarse">
            <br>
            <br>
        <?php 
            include('../logica/registrar.php'); 
            checkbox();
        ?>
        </center>
        <center><a href="index.php">Ya tengo una cuenta</a></center>
        
    </form>
</div>
    
</body>
</html>