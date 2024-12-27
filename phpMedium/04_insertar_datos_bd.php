<?php
/*
Para insertar datos em la base de datos se usa la consulta INSERT INTO
*/

#realizamos la conexion a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'vi', 'vech');

#realizamos la consulta a la base de datos
$consulta = $conexion->query("INSERT INTO tabla_prueba(columna1,COlumna2) VALUES('valor10','valor11')");

#almacenamos los datos en otra variables
$datos = $consulta;

#verificamos si tenemos resultados de actualizacion con la funcion predefinida rowCount
if($consulta->rowCount() > 0){
    echo 'Insertamos los datos correctamente <br>';
}else{
    echo 'Lo sentimos no emos encontrado ningun registro en la tabla';
}

/*
NOTA: si quierres ver los datos insertados puedes ir al archivo donde seleccionamos los
      los datos y veras en el navegador como se insertaron nuevos valores 

      Recuerda que la insercion de datos que hicimos es basica ya que si queirers ser 
      mas precisos puedes especificar las columnas que deceas que se inserten los datos

      Tambien se te recoemienda indagar mas sobre la consulta INSERT

LINKS:
    INSERT: https://dev.mysql.com/doc/refman/8.4/en/insert.html
*/

