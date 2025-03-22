<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial=scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="recursos/css/login.css">
</head>
<body>
    <form action="logica/logearce.php"  method="post" >
        <div class="contenedor">
       
            <div class="a50">
                <img src="recursos/image/logo1.png" alt="imge">
                <h2 class="titulo">INICIAR SECION</h2>
            </div>
            <div class="a30">
                <input type="text" name="usuario" placeholder="usuario">
                <input type="password" name="clave" placeholder="password">
            </div>
            <div class="a20">
                <div class="a20-50" id="inicio">
                    <button type="submit" name="inicio">INICIAR</button>
            </div>
        
        </div>
    </form>
</body>
</html>
<script src="recursos/js/estilo.js"></script>