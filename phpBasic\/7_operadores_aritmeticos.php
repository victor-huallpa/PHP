<?php
/*
En php tambien se pueden realizar operaciones matematicas, estas contienen o tienen una jerarquia que tienen que cumplir como
-suma '+'            4
-resta '-'           4
-divicion '/'        3
-multiplicacion '*'  3
-exponentes '**'     2
-resto '%'           5

y la primera jerarquia es lo que esta dentro de parentesis '()' y de acuerdo a la jerarquia se reseulve

*/

#varaibles
$val1 = 5;
$val2 = 8;
$val3 = 2;

#SUMA
$suma = $val1 + $val2;
echo $suma,'<br/>';

#RESTA
$resta = $val1 - $val2;
echo $resta,'<br/>';


#MULTIPLICACION
$multiplicacion = $val1 * $val2;
echo $multiplicacion,'<br/>';

#DIVICION
$divicion = $val2 / $val2;
echo $divicion,'<br/>';

#EXPONENTE
$exponente = $val2 ** $val3;
echo $exponente,'<br/>';

#RESTO
$resto = $val2 % $val1;
echo $resto,'<br/>';

#OPERACIONES POR JERARQUIA

$operacion = ($val1+$val3**$val1)*$val2/$val3;
echo $operacion;