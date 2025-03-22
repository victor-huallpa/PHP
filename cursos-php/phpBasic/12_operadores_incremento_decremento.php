<?php
/*
Estos operadores ayudan a sumar o disminuir valres ya sea previa o posteriormente en 1 en el
tipo de dato float o entero
*/
 
#variables
$val1 = 10;

#PRE-INCREMENTO
echo ++$val1;//muestra el valor ya incrementado
echo'<br/>';

#POST-INCREMENTO
echo $val1++;//muestra el valor de la variable antes de incrementarle
echo'<br/>';
echo $val1;
echo'<br/>';

#PRE-DECREMENTO
echo --$val1;//muestra el valor ya decrementado
echo'<br/>';

#POST-DECREMENTO
echo $val1--;//muestra el contenido de la variable antes de decrementarlo
echo'<br/>';
echo $val1;
echo'<br/>';

/*
NOTA: Este topo de operadores se usan mayor mente en los ciclos 
*/