<?php
/*
Crea un algoritmo que calcule el primedio de tres notas de un alumno estas notas varian de 0 a 10
utiliza una funcion para calcular este promedio
*/

#variables
$nota1 = 9;
$nota2 = 6;
$nota3 = 5;

#funcion
function promedio($nota1, $nota2, $nota3){
    $promedio = ($nota1 + $nota2 + $nota3)/3;
    return $promedio;
}

echo 'el prmedio de las notas '.$nota1.', '.$nota2.' y '.$nota3.' es '.promedio($nota1, $nota2, $nota3).'<br>';
echo 'el prmedio de las notas 6, 3 y 5 es '.promedio(6, 3, 5).'<br>';
echo 'el prmedio de las notas 8, 9 y 4 es '.promedio(8, 9, 4).'<br>';
/*
NOTA: concatenamos el resultado para que tenga una respuesta mas amigable
*/