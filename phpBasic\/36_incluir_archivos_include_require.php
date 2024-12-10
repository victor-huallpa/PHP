<?php
/*
Para incluir archivos php en un archivo php se utiliza las fuciones include o require
INCLUDE: esta funcion incluye archivos php, pero si el archivo php no existe o este contiene algun error en el script
         te mandara un warning y seguira ejecutando el resto del codigo que conga
REQUIRE: esta fucnion al igual que include incluye archivos php, pero con diferencia a include en caso esta
         tenga algun error o no exista el codigo mostrara un fatal error y todo el codgio se detendra
*/

include "36_archivo_incluirm.php";//Al no existir el archivo se mandara un warming de advertecnia
include "36_archivo_incluir.php";

require "36_archivo_requirel.php";//Al no exister el archivo este deja de ejecutarse en esta este punto en adelante
require "36_archivo_require.php";

echo "<br>";
echo $saludo;//al incluir el archivo php podemos usar todo lo que contiene dicho archivo ya sean las varaibel 
             //funciones y demas codigo.

echo "<br>";

echo $mensaje;

/*
NOTA: estas dos formas de incluir archivos tambien tiene sus varaintes como
- INCLUDE_ONCE: solo permite que se incluya el archvio una vez
- REQUIRE_ONCE: solo permite que el archivo se incluya una vez

para saver un poco mas se les recomeinda leer la documentacion de php
LINKS:
- INCLUDE: https://www.php.net/manual/es/function.include.php
- REQUIRE: https://www.php.net/manual/es/function.require.php
- INCLUDE_ONCE: https://www.php.net/manual/es/function.include-once.php
- REQUIRE_ONCE: https://www.php.net/manual/es/function.require-once.php
*/