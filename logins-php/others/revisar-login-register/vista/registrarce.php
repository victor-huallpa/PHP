<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <center>
        <p><h2>REGISTRARCE</h2></p>
        <p>Datos principales</p>
    <form action="registrarce.php"  method="post">
        
            <input type="text" name="usuario" placeholder="usuario">
            <br>
       
            <input type="password" name="clave" placeholder="password">
            <br>
            <p>datos para armar tu cv</p>
            <p>llenar todos los campos es obligatorio.</p>
            <br>
            <input type="text" name="edad" placeholder="edad">
            <br>
            <input type="text" name="carrera" placeholder="carrera">
            <br>
            <input type="text" name="genero" placeholder="genero">
            <br>
            <input type="text" name="estado" placeholder="estado">
            <br>
            <input type="text" name="correo" placeholder="correo">
            <br>
       
            <input type="submit" name="validar" value="registrarce">
       

        <?php 
            include('../logica/registrar.php');
            registro();
        ?>
        </center>
        <a href="../index.php">atras</a>
    </form>
</div>
    
</body>
</html>