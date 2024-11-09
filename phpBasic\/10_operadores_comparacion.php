<?php
/*
Los operadores de comparacion, es la forma y manera de comparar valores que el resultado devuelva 
true or false. dependiendo de la veracidad de los calores
-IGUALDAD '=='
-IDENTIDAD '===' valida tanto si el valor1 es igual al valor 2 como el tipo de dato de cada uno sea igual
-DIFERENTE '<>'
-DIFERENTE '!='
-NO IDENTICO '!==' verifica que ambos valores 1 y 2 sean distintos tanto en valor como en tipo de dato.
-MENOR QUE '<'
-MAYOR QUE '>'
-MENOR IGUAL '<='
-MAYOR IGUAL '>='
*/

#varaibles
$val1 = '1';
$val2 = 1;
$val3 = 'hola';
$val4 = 'hi';
$val5 = 1.1;

#IGUALDAD
var_dump($val1 == $val2);
echo'<br/>';

#IDENTIDAD
$identidad = $val1===$val2;
var_dump($identidad);
echo'<br/>';

#DIFERENTE
var_dump($val3<>$val4);
echo'<br/>';

#DIFERENTE
var_dump($val3!=$val3);
echo'<br/>';

#NO IDENTICO
var_dump($val3!==$val3);
echo'<br/>';

#MAYOR QUE
var_dump($val5>$val2);
echo'<br/>';

#MENOR QUE
var_dump($val5<$val2);
echo'<br/>';
