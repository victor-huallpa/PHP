<?PHP
function imprimir($nombre, $apellido){
    //rutinas o instrucciones
    echo 'hola '.$nombre.' '.$apellido.'</br>';
}
$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
imprimir('vech','');//estamos llamando a la funcion.
imprimir('juan', '');//estamos llamando a la funcion.
imprimir($name, $lastname);//estamos llamando a la funcion.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuciones</title>
</head>
<body>
    <form action="ejercicio15.php" method="post">
        Nombre: 
        <input type="text" name="nombre" id="">
        <br>
        Apellido: 
        <input type="text" name="apellido" id="">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>