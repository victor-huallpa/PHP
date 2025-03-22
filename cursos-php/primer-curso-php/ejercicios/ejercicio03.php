<?php
if ($_GET){//muestra los datos atraves de la url "get" post no lo hace,
    $nombre = $_GET['nombre'];
    echo "tu nombre es ".$nombre;
}

?>

<form action="ejercicio03.php" method="get">
    <input type="text" name="nombre" id="">
    <input type="submit" name="envair" id="">
</form>