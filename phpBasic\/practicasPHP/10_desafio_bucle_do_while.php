<?php
/*
Dise;a un algoritmo que imprima los numeros del 1 al 20, con decremento y decremento
*/

#variables
$valor = 1;

#do while incremento
do{
    echo "valor {$valor}";
    echo'<br/>';
    ++$valor;
}
while($valor <= 20);

#do while decremento
do{
    --$valor;
    echo "valor {$valor}";
    echo'<br/>';
}
while($valor <= 21 and $valor >= 2);