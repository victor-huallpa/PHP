<?php
/*
Para realizar la selecciones de datos de una base de datso se realiza consultas mediante php
y las cosnultas son las mismas que vimos en cosntulas_mysql

*/

#realizamos la conexion a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=prueba', 'vi', 'vech');

#realizamos la consulta a la base de datos
$consulta = $conexion->query("SELECT * FROM tabla_prueba");

#almacenamos los datos en otra variables
$datos = $consulta;

#verificamos si tenemos resultados con la funcion predefinida rowCount
if($consulta->rowCount() > 0){
    echo 'tenemos regsitros <br>';
    # Iteramos sobre los resultados
    while ($datos = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo $datos['columna1'] .'  ,   '.$datos['COlumna2']. '<br>';  # Accedemos a la columna1 y columna 2
    }
}else{
    echo 'Lo sentimos no emos encontrado ningun registro en la tabla';
}

#cerramos la conexion
$conexion = null;

/*

NOTA: 
     - query: es la funcion por la cual pasamos la consulta y la ejecuta alli mismo
     - rowCount: verifica si existen regsitros o fila de datos en la base de datos
     - fetch:  Obtiene una fila de un conjunto de resultados asociado al objeto 
               PDOStatement. 
     - PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas 
                         del conjunto de resultados. 

LINKS: 
      - query: https://www.php.net/manual/es/pdo.query.php
      - rowCount: https://www.php.net/manual/es/pdostatement.rowcount.php
      - fetch: https://www.php.net/manual/es/pdostatement.fetch.php
      - PDO::FETCH_ASSOC: https://www.php.net/manual/es/pdo.constants.php#pdo.constants.fetch-assoc
      - SELECT: https://dev.mysql.com/doc/refman/8.4/en/select.html
*/
