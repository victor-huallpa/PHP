<?php 
    echo "hola mundo\n";
    print("hola como estas\n");
    print_r($_POST['enviar']);


    /**hola como estas este es un comentario 
     este c0omentario puede ser todo un parrafo
    */
    //esta fomra es como puedes comentar una linea.
    //cada comentario ayuda con el codigo y guiarse de como funciona esta parte.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP</title>
</head>
<body>
    <form action="ejercicio01.php" method="post">
        <input type="text" name="nombre" id="" placeholder="Nombre">
        <input type="submit" name="enviar" value='enviar'>
    </form>
</body>
</html>