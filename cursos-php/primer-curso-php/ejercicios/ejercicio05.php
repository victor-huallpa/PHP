<?php
if ($_POST){
    echo "hola ".$txtnombre = $_POST['nombre']." ".$nombre = $_POST['apellido'];//concatenacion "."
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
    <form action="ejercicio05.php" method="post">
        Nombre:
        <input type="text" name="nombre">
        <br>
        Apellido
        <input type="text" name="apellido" id="">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>