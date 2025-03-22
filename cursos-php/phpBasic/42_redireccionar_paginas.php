<?php
/*
Para redireccionar a una pagina se ustiliza la funcion de PHP:
header('Location: RUTA DE LA PAGINA QUE REDIRIGIRAS').

tambien se puede usar codigo js, para eso debera imprimir mediante echo la etiqueta script de html

echo "<script> window.location.href = '42_navegar.php'; </script>";
*/

#validamos el metodo get
if(!empty($_GET['navegar'])){
    if($_GET['navegar'] === 'navegar'){
        echo 'hola';
        if(headers_sent()){//la funcion header_sent verfica que si hay resultado imprimidos por pantalla
                           
            echo "<script> window.location.href = '42_navegar.php'; </script>";
        }else{

            header("Location: 42_navegar.php");
        }
    }else{
        echo 'intento invalido';
    }
}

/*
NOTA: la funcion header no respondera si existe algun encabezado enviado a pantalla
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="42_redireccionar_paginas.php" method="get">
        <button type="submit" value="navegar" name="navegar">navegar</button>    
    </form>
    
</body>
</html>