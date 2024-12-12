<?php
/*
crea un algoritmo que envie atraves de una sesion el nombre de un usuario introduciodo por un input 
y valide si el nombre coinside o no en otro archvio php teniendo en cuenta quetiene que enviarse por ajas
tambein el datos titene que enviarse encriptado con pasword_hash
nombre que debe coincidir 'VICTOR' 

*/

#iniciamos la sesion
session_name('nombre');
session_start();

#creamos la entrada de dato para el usurio
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de Usuario</title>
</head>
<body>
    <form action="16_recepcion.php" method="post" class="nombre_formulario">
        <label for="nombre">Nombre de usuario</label>
        <input type="text" name="nombre" id="nombre"> 
        <br>
        <input type="submit" value="enviar">
    </form>
    <br>
    <br>
    <h3> <?php echo (!empty($_SESSION['nombre']))? $_SESSION['nombre']: 'Inicie sesion.'; ?></h3>

    <script src="16_ajax.js"></script>
</body>
</html>

