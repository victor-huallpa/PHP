<?php

#iniciamos la session
session_name('validar_login');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagania Principal</title>
</head>
<body>
    <h1>welcome World</h1>
    <a href="login.php">Logearce</a>
    <br>
    <h3><?php echo $_SESSION['nombreU']; ?></h3>

    <ul>
        <li><a href="pagina_2.php">nosotros</a></li>
        <li><a href="pagina_3.php">contactenos</a></li>
    </ul>
</body>
</html>