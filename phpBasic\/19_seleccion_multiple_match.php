<?php
/*
El selecctor multiple match es identica en funcionamiento a el selecctor multiple switch con diferencia
que embes de comparar la varaible con una comparacion debil == lo hace con una de identidad ===.
Ejemplo:
*/
#variables
$valor = 8;

$x = 5;
$z = 9;

#match
$resultado = match ($valor){
    1 => "El valor {$valor} es igual a 1",
    2 => "El valor {$valor} es igual a 2",
    3 => "El valor {$valor} es igual a 3",
    4 => "El valor {$valor} es igual a 4",
    $x => "El valor {$valor} es igual a 5",
    // $valor > $x and $valor <= $z => "El valor {$valor} es igual a 6",//solo aplica cuando match evalua en true
    10,11 => "El valor {$valor} es igual a 10 o 11",
    default => "El valor {$valor} no corresponde a ninguna opcion"
};
echo $resultado;
/*
Nota: Este selecctor multiple fue introducido en php 8.0.0 y apartir de esa version esta disponible.
      Tener en cuenta que el valor devueto se guarda e nuna variable para despues realizar otras ooperaciones con esta.
      Tambien se puede usar operadores logicos 'boleanos true o flase' a la ora de evaluar cual sera el balor devuelto de match, consideraque match tiene que evaluar en true
*/