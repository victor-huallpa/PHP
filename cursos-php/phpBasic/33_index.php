<?php
/*
La forma de recibir los datso del formulario ya sea mediante el metodo get o post es mediante
$_METODOUSADO[]
Este metodo se puede almacenar dentro de varaibles otrabajr directamente con estas
*/

$nombre = $_POST['nombre'];
$asignatura = $_POST['asignatura'];
$fruta = $_POST['Frutas'];

echo "$nombre - $asignatura - $fruta";
echo '<br>';

$nombre = $_GET['nombre'];
$asignatura = $_GET['asignatura'];
$fruta = $_GET['Frutas'];

echo "$nombre - $asignatura - $fruta";

/*
NOTA: La diferencia entre estos dos metodos es la manera en como se envian los datos del formulario hacia
      la ruta destino
      con el metodo POST los datos se envain de forma oculta y sirven para enviar un gran volumen de datos
      con GET los datos se envian atraves de la url de la web y tienen un limite de datos que se peuden enviar
      Recomiendo revisar la documentacion para tener mas contexto del tema

LINKS: 
- GET: https://www.php.net/manual/es/reserved.variables.get.php
- POST: https://www.php.net/manual/es/reserved.variables.post.php
*/