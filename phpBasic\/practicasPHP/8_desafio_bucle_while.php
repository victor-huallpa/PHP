<?php
/*
Dise;a un algoritmo que imprima los numeros del 1 al 20, con decremento y decremento
*/

#variables
$valor = 20;

//while decremetno
while ($valor <= 20 and $valor >= 1){
    echo "el nuermo es {$valor}";
    echo '<br />';
    --$valor;
}

//while incremento

while ($valor <= 19 and $valor >= 0){
    ++$valor;
    echo "el nuermo es {$valor}";
    echo '<br />';
}