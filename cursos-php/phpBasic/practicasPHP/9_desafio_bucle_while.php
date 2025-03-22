<?php
/*
Diselar un algoritmo que imprima la tabla de multiplicar del 1 al 12 tanto en decremetno como incremento
*/

#varriables
$multiplicador = 1;
$multiplicado = 1;

#bucle while incremento
while($multiplicador >= 1 and $multiplicador <= 12){
    $resultado = $multiplicado*$multiplicador;
    echo "La multiplicacioin de $multiplicado por $multiplicador es {$resultado}";
    echo '<br />';
    ++$multiplicador;
}
echo '<br />';

#bucle while decremento
while($multiplicador >= 2 and $multiplicador <= 13){
    --$multiplicador;
    $resultado = $multiplicado*$multiplicador;
    echo "La multiplicacioin de $multiplicado por $multiplicador es {$resultado}";
    echo '<br />';
}