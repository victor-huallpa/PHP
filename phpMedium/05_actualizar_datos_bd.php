<?php
/*
Para actualizar datos de la base de datos se usa la consulta UPDATE
*/

#realizamos la conexion a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'vi', 'vech');

#realizamos la consulta a la base de datos
$consulta = $conexion->query("UPDATE tabla_prueba SET columna1='valores'");

#almacenamos los datos en otra variables
$datos = $consulta;

#verificamos si tenemos resultados de actualizacion con la funcion predefinida rowCount
if($consulta->rowCount() > 0){
    echo 'actualizamos correctamente la columna <br>';
}else{
    echo 'Lo sentimos no emos encontrado ningun registro en la tabla';
}

/*
NOTA: si quierres ver los datos alterados puedes ir al archivo donde seleccionamos los
      los datos y veras en el navegador como se alteraron los datos

      Recuerda que la actualizacion de datos que hicimos es basica ya que si queirers ser 
      mas preciso con la consulta puedes usar unsa consulta mas robusca con where, join
      y otros parametrso que puede tener la consulta

      Tambien se te recoemienda indagar mas sobre la consulta UPDATE

LINKS:
    UPDATE: https://dev.mysql.com/doc/refman/8.4/en/update.html
*/

