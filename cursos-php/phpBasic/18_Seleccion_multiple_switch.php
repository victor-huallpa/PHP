<?php
/*
El selecciononador multiple switch, es parecido a las condicionales, ya que permiten trabjar con mulitbples valores
o de acuerdo a lo que se valide.
La estrucutra es de igualdad simple
Ejemplo:
*/
#varibales:
$fruta = 'nn';

#Switch
switch($fruta){
    case 'fresa'://primer caso
        echo "La fruta seleccionada es {$fruta}.";
    break;
    case 'pera'://segundo caso
        echo "La fruta seleccionada es {$fruta}.";
    break;
    default://es sinilar a else, en caso que una las condiciones o opciones no se cumpla automaticamente se ejecuta
        echo "La seleccion {$fruta} no es ni pera ni fresa.";
    break;
}
