<?php
/*
Para unir o juntar tablas en mydql mediante php se utiliza en la constula SELECT, INSERT, UPDATE, DELETE
pero normalmente se usa mas para la consulta SELECT, tomar ene cuenta que la sentencia
INNER JOIN se usa para unir tablas que estan relacionadas o comparten mismos datos en siertas columnas de 
dos o mas tablas.

recuerda que puesde ver este tipo de consulta en la carpeta consultas_mysql 


en este ejemplo realizaremso un INNIER JOIN en la consulta SELECT

SINTAXIS:

SELECT * FROM nombre_tabla
INNER JOIN nombre_tabla2 ON nombre_tabla.nombre_columna = nombre_tabla2.nombre_columna
INNER JOIN nombre_tabla3 ON nombre_tabla.nombre_columna = nombre_tabla3.nombre_columna;
*/

#realizamos la conexion a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'vi', 'vech');

#realizamos la consulta a la base de datos
$consulta = $conexion->query("SELECT * FROM tabla_prueba INNER JOIN tabla_prueba2 ON tabla_prueba2.columna1 = tabla_prueba.columna1");

#verificamos si tenemos resultados de eliminacion con la funcion predefinida rowCount
if($consulta->rowCount() > 0){
    echo 'tenemos regsitros <br>';
    # Iteramos sobre los resultados
    while ($datos = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo $datos['columna1'].' '.$datos['COlumna2'].' '.$datos['columna3'].'<br>';  # Accedemos a la columna1 y columna 2
    }
}else{
    echo 'Lo sentimos no emos encontrado ningun registro en la unios de las tablas.';
}

/*
NOTA: 
      Recuerda que la union de tablas que hicimos es basica ya que si queirers ser 
      mas preciso con la consulta puedes usar unsa consulta mas robusca con where, limit y order by
      y otros parametrso que puede tener la consulta

      Tambien se te recoemienda indagar mas sobre la consulta DELETE

LINKS:
    INNIER JOIN: https://dev.mysql.com/doc/refman/8.4/en/join.html
*/

