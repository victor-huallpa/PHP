<?php 
    if($_POST){ //se verifca si existe un envio atraves del metodo
        $nombre = $_POST['nombre'];//se recepciona el envio de datos en un metodo post
        echo "hola ".$nombre;//se concatena y imprime la variable.
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio PHP 2</title>
</head>
<body>
    <form action="ejercicio02.php" method="post">
        Nombre:
        <input type="text" name="nombre">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>