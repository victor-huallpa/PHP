<?php
/*
En esta parte resiviremos el archovo envia desde el formulario que esta en 'subir_enviar_archivo.php'

para resivir los archivos lo realizamos con el metodo:
$_FILES[];
*/

$archivo = $_FILES['archivo'];
echo $_FILES['archivo']['name'];
echo '<br>'; 
echo $_FILES['archivo']['full_path'];
echo '<br>'; 
echo $_FILES['archivo']['type'];
echo '<br>'; 
echo $_FILES['archivo']['tmp_name'];
echo '<br>'; 
echo $_FILES['archivo']['error'];
echo '<br>'; 
echo $_FILES['archivo']['size'];
echo '<br>'; 
echo '<br>'; 
echo '<br>'; 

foreach($archivo as $clave => $dato){
    echo $clave.' - '.$dato.'<br>'; 
}

