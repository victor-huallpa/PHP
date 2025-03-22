<?php  include('includes/head.php')?>

    <form action="logical/index_logica.php">
        <center>
            <h1>INICIO SESION</h1>        
            <input type="email" placeholder="correo" name="mail">
            <br>
            <input type="password" placeholder="pasword" name="pasword">
            <br>
            <input type="submit" value="enviar">
            <br>
            no cuenta con una cuenta <a href="views/registro.php">registrace</a>
        </center>

    </form>        

<?php  include('includes/footer.php')?>
