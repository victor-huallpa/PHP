<?php
/*
Diselar un algoritmo que imprima la tabla de multiplicar del 1 al 12 tanto en decremetno como incremento
*/

#varriables
$multiplicado = 3;

#ciclo for decremetno
for($contador = 12; $contador > 0 ; $contador--){
    $resultado = $multiplicado * $contador;
    echo "El resutaldo al mulitplicar $multiplicado x $contador es {$resultado}";
    echo'<br/>';
}

#ciclo for incremento
for($contador = 1; $contador <= 12 ; $contador++){
    $resultado = $multiplicado * $contador;
    echo "El resutaldo al mulitplicar $multiplicado x $contador es {$resultado}";
    echo'<br/>';
}
