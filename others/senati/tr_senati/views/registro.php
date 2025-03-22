<?php  include('../includes/head.php')?>

<div>
    <center>
            <br>
        <p><h2>REGISTRO</h2></p>
        <p><h3> Llenar los siguientes campos </h3></p>
    <form action="../logical/registro_logica.php" method="post">
        <br>
            <input type="text" name="nombre" placeholder="Nombre">
            <br>
            <br>
            <input type="text" name="apellido" placeholder="Apellido">
            <br>
            <br>
            <input type="text" name="dni" placeholder="DNI" minlength="8" maxlength="8">
            <br>
            <br>
            <input type="email" name="correo" placeholder="Correo">
            <br>
            <br>
            <input type="text" name="n_cel" placeholder="Celular" minlength="9" maxlength="9">
            <br>
            <br>
            <input type="password" name="contrasena" placeholder="contraseña">
            <br>
            <br>
            <input type="password" name="contrasena1" placeholder="contraseña">
            <br>
            <br>
            tipo de contrato: 
            <select name="tipo_contrato[]" id="">
                <option value="tiempo completo">tiempo completo</option>
                <option value="tiempo parcial">tiempo parcial</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Registrar">        
            <br>

            Ya tengo una cuenta <a href="../index.php">logear</a></center>        
    </form>
</div>
<?php  include('../includes/footer.php')?>
