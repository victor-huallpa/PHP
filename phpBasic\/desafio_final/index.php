<?php
#incluimos el archivo del header de la pagina
include_once 'layout/header.php';

?>
    <h1>welcome World</h1>
    <a href="cerrar_sesion.php"><?php echo empty($_SESSION['nombreU'])? 'Lograce': 'Cerrar sesion'; ?></a>
    <br>
    <h3><?php echo $_SESSION['nombreU']; ?></h3>

<?php
#incluimos el archivo del footer de la pagina
include_once 'layout/footer.php';

?>