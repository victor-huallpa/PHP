<?php
/*
Una funcion es un conjunto de indicaciones a las cuales podemos recorrir en cualquier momento que deseemos
o necesitemos, estas pueden resivir parametros y y realizar tareas de acuerdo a ello desde complejas asta sensillas

SINTAXIS: El nombre de una funcion empieza con una letra o guion bajo despues de ello puede tener letras
numero o guiones bajos.

function 'nombre de la fucnion'($parametro que resivira la funcion){
    codigo a ejecutar de la fucnion
}



Ejemplo:
*/
#variables
$nombre = 'Victor';

#funcion
function saludo($nombre){//tener en cuenta que cuando resive el parametro puede cambair de nombre al que mas le convenga
    return "Hola mi nombre es {$nombre}";
}

#llamada a la fucnion

$retorno = saludo($nombre);//se le llama a la fucnion y depaso se le pasa el parametro con el nombre respectivo
echo $retorno;//imprimimos lo que se retorna de la fucion
/*
NOTA: las funciones mayormente se usan en programaicon orientada a objetos POO.
      en caso no se imprima nada en la ducion y quieres retornar algun valor se utiliza return
*/