<?php
/*
Asignar por referencia es darle un valor a una segunda variable, y si cambia el valor de la primera varibale esta 
segunda variable tambien cambiara su valor. esto se realiza con el signo de '&'
*/

$val1 = 'hi world';

$val2 = $val1;
$val3 = &$val1;//asignaicon por referencia.

echo $val1,'<br/>';
echo $val2,'<br/>';
echo $val3,'<br/>';

$val1 = 'hello world';//valor 1 actualizado

echo $val1,'<br/>';
echo $val2,'<br/>';//matiene la primera asignacion que se le dio del valor 1
echo $val3,'<br/>';//se actualiza junto al valor 1