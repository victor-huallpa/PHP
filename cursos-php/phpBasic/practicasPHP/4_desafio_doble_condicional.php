<?php
/*
Determinar si un alumno desaprueba o aprueba, teniendo en cuenta que 
lleva tres cursos cada curso con nota maxima de 10 de cada curso
aprueva si obtiene promedio de 07, caso contrario desaprueva
*/
//variables
$nota1 = 5;
$nota2 = 8;
$nota3 = 9;

//calculando el promedio aritmetico de las tres notas
$promedio = ($nota1 + $nota2 + $nota3)/3;

//Comprobando con condicional si aprueba o desaprueba el ciclo

if ($promedio > 7){
    echo "El promedio de tus notas {$nota1}, {$nota2} y {$nota3} es de {$promedio}, y significa que aprobaste el ciclo";
}
else{
    echo "Lo siento el promedio de tus notas {$nota1}, {$nota2} y {$nota3} es de {$promedio}, y no es suficiente para aprobar el ciclo";
}
