<?php
/*
Las fucniones matematicas, son funciones predefinidas en php estas funciones nos ayudan a realizar
calculos matematicos de acuerdo a nuestras necesidades
NTOA: Se recomienda leer la documentacion de las fucniones matematicas de php
LINK: https://www.php.net/manual/es/ref.math.php
*/

#funciones matecidas predefinidas

echo pow(5,3); // esta fucnion ayuda a elevar a la potencia pow(base,expomente)
echo '<br>';
echo sqrt(9); //esta fucnion ayuda a sacar raices cuadradas sqrt(radicando)
echo '<br>';
echo rand(1,100); //esta funcion nos ayuda a obtener numeros aleatoreos rand(min valor, max valor)
echo '<br>';
echo pi(); //esta fucnion te devuelve el valor de pi
echo '<br>';
echo floor(4.5); // esta funcion redondea el valor hacia hacia abajo floor(valor aredondear)
echo '<br>';
echo ceil(4.5); // esta funcion redondea el valor hacia arriba ceil(valor a redondear)
echo '<br>';
echo round(5.8565,1); //esta funcion redondea dependiendo del valor decimal si termina en 5 lo redodnea hacia arriva y si es menor lo redodndea hacia abajo
                 //round(valora a redodnear, numerode decimales que se desea mostar)   