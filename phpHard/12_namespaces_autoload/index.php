<?php
/*
Los namespace son una herramienta poderosa para evitarar colisones de nombres

dise;ados para dos problemas con clases y funciones

1: conflicto con nombres
2: Capacidad de abreviar nombres largos, mejorando la legibilidad de codigo

los name space fucnonan en
-clases
-interfaces
-traits
-funciones
-constantes declaradas con const pero no con define

podemos definir un namespace con la palabra reservada

'namespace'


El autoload ayuda a usar recursos necesarios 'incluir archivos de acuerdo al uso de 
las clases o funciones usadas
*/

#incluimos el archivo autoload.php
require_once 'autoload.php';

#definimos los namespaces y renombramos las clases
use Clases\Usuario;
use Clases\Admin\Usuario as AdminUsuario;//usamos as para remombrar la clase

// Usamos las clases con namespaces
$usuario = new AdminUsuario();
echo $usuario->saludar(); 

echo '<br>'; 

$admin = new Usuario();
echo $admin->saludar();

echo '<br>'; 

$otro = new AdminUsuario();
echo $otro->saludar();

/*
NOTA: tener encuenta que los namespace se deben definir con el nombre de acuerdo a la ruta
      que del directorio que se esta trabando y haci mismo respetar la smayusculas o minusculas
      del nombre de la ruta, para que no tenga errores al momento de colocar el namespace
*/