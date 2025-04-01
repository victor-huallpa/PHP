<link rel="stylesheet" type="text/css" href="../css/stylej.css">
<?php  include('../includes/head.php')?>

<div>
    <center>
        <h2>REGISTRO</h2>
        <p><h3> Llenar los siguientes campos </h3></p>
        <form action="../logical/registro_logica.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <br>
            <input type="text" name="apellido" placeholder="Apellido">
            <br>
            <input type="text" name="dni" placeholder="DNI" minlength="8" maxlength="8">
            <br>
            <input type="email" name="correo" placeholder="Correo">
            <br>
            <input type="text" name="n_cel" placeholder="Celular" minlength="9" maxlength="9">
            <br>
            <input type="password" name="contrasena" placeholder="contraseña">
            <br>
            <input type="password" name="contrasena2" placeholder="confirmar contraseña">
            <h4>Tipo de contrato:
                <select name="tipo_contrato" id="">                
                    <option value="tiempo completo">tiempo completo</option>
                    <option value="tiempo parcial">tiempo parcial</option>
                </select>
            </h4>
            <input type="submit" value="Registrar">        
            <br>
            <h3>Ya tengo una cuenta: <a href="../index.php">Iniciar sesion</a></h3>
        </form>
    </center> 
</div>
<?php  include('../includes/footer.php')?>
