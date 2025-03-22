<?php
/*
Las cookies son datos almacenados en el navegador, y permiten monitorizar y identificar a los usuarios
que vuelven al mismo sitio web
Este archivo se almacena en el navegador del cliente

Las cookies se deben de crear antes del doctype 'codigo HTML', ya que a de ser procesada y generadas 
antes que se genere o procese el codigo HTML

Ejemplo: preferencia de idioma de un usuario 
         sitios vicitados con concurrencia
         seguimiento de anuncios
         etc

En este caso la cookie se crea mediante la funcion

setcookie("nombre", valor. expiracion, dir ,dominio, secure, httponly);

los parametrso
NOMBRE: es el nombre que se le atrubuye a la cookie
VALOR: El valor de la cookie contenido
EXPIRACION: fecha de expiracion de la cookie
DIR: directorio donde va estar disponible la cookie
DOMINIO: dominio o servidor de la cookie
SECURE: seguridad de la cookkie al crearla en caso sea https
HTTPONLY: es para definir si la cookie sera leida unicamente por el protocolo http
*/

setcookie("Idioma","es",time()+60*60*24*30,"/","http://localhost/php_class",false,false);
//la cookies dura 30 dias ya que le agragamso el valor de +60*60*24*30
//el parametro DIR le dimos el valor de barra / eso significa que el la cookie va estar disponible en cualquier parte del directorio de la web alojada
// tambien se le puede agragar una ruta espesifica donde puede estar disponible dicha cookie'/ruta/'
//DOMINO: la ruta de domino que estara disponible la cookie y podra ser leida, en nuestro caso solo localhost
//Los dos ultimos parametros solo pueden resivir valor boleanos ture o false, esto por que se dice si se crea o no la cookies
//cuando el parametro tenga solo https y sea accesible cuando este  solo tenga protocolo http
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    hola mundo b
    <br>
    <h1><?php echo $_COOKIE['Idioma']; //imprimimos la cookies con $_COOKIE['nombre de la cookie']?></h1>
</body>
</html>