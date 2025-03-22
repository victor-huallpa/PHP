<?php
/*
En esta leccion aprenderemos a usar la funcion Emty y la fucnion isset que ayuda a validar con
datos boleanos una variable y adicional tambein aprenderemos a verificar si un valor o variable es
nula con la fucnion is_null
para esto usaremos condicionales

is_null: esta funcnion verifica si la variable es nula
empty: esta funcion verifica si la variable esta vacia
isset: esta funcion verifica si la variable no es nulla y esta definida
*/

#variables
$dato_nulo = null;//un dato es nulo si este se le asigna el valor null o simplemente no se le asigna ningun dato 'solo creas la varaible'
$dato_vacio = 0;//La varaible se cosnidera vacia si esta contiene cero, es valor nulo, 0.0 o cuando esta vacia
$dato_definido = 'hola';//La variable esta definida siempre y cuando contenga un valor y exista.
#verificar si el dato es nulo
if(is_null($dato_nulo)){
    echo 'El dato es nulo';
}else{
    echo 'El dato no es nulo';
}
echo '<br>';

#verificar si el dato esta vacio
if(empty($dato_vacio)){
    echo 'El dato esta vacio';
}else{
    echo 'El dato no esta vacio';
}
echo '<br>';

#verificar si el dato esta definida
if(isset($dato_definido)){
    echo 'El dato esta definida';
}else{
    echo 'El dato no esta definida';
}

/*
NOTA: se recoemienda leer la documentacion para entender emjor el contexto de estas fucniones
LINKS:
-empty: https://www.php.net/manual/es/function.empty.php
-isset: https://www.php.net/manual/es/function.isset.php
-is_null: https://www.php.net/manual/es/function.is-null.php
*/