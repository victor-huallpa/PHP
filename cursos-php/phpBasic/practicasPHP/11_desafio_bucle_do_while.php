<?php
/*
Diselar un algoritmo que imprima la tabla de multiplicar del 1 al 12 tanto en decremetno como incremento
*/

#varriables
$multiplicador = 1;
$multiplicado = 2;

#do while incremento
do{
    $resultado = $multiplicado * $multiplicador;
    echo "El resutaldo al mulitplicar $multiplicado x $multiplicador es {$resultado}";
    echo'<br/>';
    ++$multiplicador;
}
while($multiplicador <= 12);

#do while decremento
do{
    --$multiplicador;
    $resultado = $multiplicado * $multiplicador;
    echo "El resutaldo al mulitplicar $multiplicado x $multiplicador es {$resultado}";
    echo'<br/>';
}
while($multiplicador <= 13 and $multiplicador >= 2);