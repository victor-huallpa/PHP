<?php
/*
Para elimina datos de la base de datos en una tabla se usa la consulta DELETE
*/

#realizamos la conexion a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'vi', 'vech');

#realizamos la consulta a la base de datos
$consulta = $conexion->query("DELETE FROM tabla_prueba");

#verificamos si tenemos resultados de eliminacion con la funcion predefinida rowCount
if($consulta->rowCount() > 0){
    echo 'Eliminamos correctamente los datos de la tabla tabla_pruba <br>';
}else{
    echo 'Lo sentimos no emos encontrado ningun registro en la tabla';
}

/*
NOTA: si quierres ver los datos alterados puedes ir al archivo donde seleccionamos los
      los datos y veras en el navegador como se alteraron los datos

      Recuerda que la eliminacion de datos que hicimos es basica ya que si queirers ser 
      mas preciso con la consulta puedes usar unsa consulta mas robusca con where, join
      y otros parametrso que puede tener la consulta

      Tambien ser cuidadoso con esta consulta ya que cuando no definimos el registro en 
      especifico que queremos eliminas con where se eliminara todos los datos de la tabla 
      seleccionada como se muestra en este caso

      Tambien se te recoemienda indagar mas sobre la consulta DELETE

LINKS:
    DELETE: https://dev.mysql.com/doc/refman/8.4/en/delete.html
*/

