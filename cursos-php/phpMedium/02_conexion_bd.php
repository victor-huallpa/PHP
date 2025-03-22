<?php
/*
Para realizar una conexion a base de datos se realiza la sigueinte sintaxis
*/

#variables donde almacenaremos los datos necesario para la conexion
$host = 'localhost';//lugar donde se ubica la base de datos ya sea local o en la nube
$nombre_base_datos = 'prueba';//nombre de la base de datos que se usara 
$usuario_base_datos = 'vi';//nombre de usuario de la base de datos
$pass_usuario_base_datos = 'vech';//contrasenia del usuario de la base de datos

#variable de conexion a la base de datos, en este caso para conectarnos estamos 
#usando PDO_MySQL tambien existen forma de conectarce a base de datos MySQLi y mysql
$conexion = new PDO('mysql:host='.$host.';dbname='.$nombre_base_datos, $usuario_base_datos, $pass_usuario_base_datos);

#verificamos la si la conexion se realizo exitozamente
if($conexion){//la conexion se ejecuta y devuelve valores boleamos 1 o 0, 'true' o 'false'
    echo "la conexion fue exitosa";
}else{
    echo "ERROR! al intentar conectarte a la base de datos";
}

#cerramos la conexion de la base de datos
$conexion = null; // un metodo de cerrar la conexion a la base de datos.


/*
NOTA: La conexion que realizamos a la base de datos es muy simple ya que la forma de 
      manejar o validar la conexion debe realizarce manejando excepciones y ya la 
      veremos en accion cuando realicemos el proyecto de inventario.

      sintaxis simple de conexion a base de datos:
        $conexion = new PDO('mysql:host=localhost;dbname=nombre_base_datos', 'nombre_usuairo_base_datos', 'contrasenia_usuario_base_datos');
      pero como nosotros ya sabemos concatenar e interpolar datos lo realizamos de esa manera.

LINKS DOCUEMNTACION
    CONEXION A BASE DE DATOS: https://www.php.net/manual/es/mysqlinfo.api.choosing.php 




*/


/*
LES DEJO LAS LINEAS DE CODIGO PARA UNA CONEXION A BASE DE DATOS MAS COMPLEJA Y 
FUNCIONAL 

#funcion conexion, para crear una conexion promedio
function conexion ($host,$nombre_base_datos,$usuario_base_datos,$pass_usuario_base_datos){
    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$nombre_base_datos, $usuario_base_datos, $pass_usuario_base_datos);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // return $pdo;
        #insertamos datos
    
        // $pdo->query("INSERT INTO Categoria(categoria_nombre,categoria_ubicacion) VALUES('prueba','ubicacion texto')");
        echo "Conexión exitosa.";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
}

#llamamos a la fucion conexion y la almacenamso en una variable
$base_datos_conexion = conexion($host,$nombre_base_datos,$usuario_base_datos,$pass_usuario_base_datos);

#cerramos la conexion
$base_datos_conexion = null;

 */

