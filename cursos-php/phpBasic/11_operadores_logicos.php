<?php
/*
Los operadores logicos son la forma de dar complegidad a los operadores de comparacion, de la manera en
en que convenga, estas expreciones son:
- y 'and'
- o 'or'
- no '!' invierte el valor boleano de false a true o de true a false
- y '&&'
- o '||'
*/

#variables
$val1 = 1;
$val2 = 2;
$val3 = 'hi';

# and
var_dump($val1 == $val2 and $val1 != $val3);
echo'<br/>';
var_dump($val1 == $val2 && $val1 != $val3);
echo'<br/>';
var_dump($val1 != $val2 && $val1 != $val3);
echo'<br/>';

# or
var_dump($val1 == $val2 or $val1 == $val3);
echo'<br/>';
var_dump($val1 == $val2 || $val1 != $val3);
echo'<br/>';
var_dump($val1 != $val2 || $val1 == $val3);
echo'<br/>';
var_dump(($val1 != $val2) > $val1 == $val3);
echo'<br/>';

#!
var_dump(!($val1 == $val2) and $val1 != $val3);
echo'<br/>';
var_dump(!($val1 != $val2) || $val1 == $val3);
echo'<br/>';
var_dump($val1 != $val2 && !($val1 == $val3));
echo'<br/>';

/*
NOTA: tanto las comparaciones y operadores que estan en expreciones se pueden almacenar en variables
*/
$boleano1 = $val1 != $val2 && !($val1 == $val3);
var_dump($boleano1);
