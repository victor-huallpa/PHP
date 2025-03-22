<?php
/*
Pida al usuairo su edad y genero para poder evaluar si este ya se puede jubilar o no.
Tenga en cuenta que un trabajador se puede jubilar cuando cumpla 60 anios, en caso sea mujer 
esta se puede jubilar a los 54 anios.
*/

#variables
$edad = 56;
$genero = 'femenino';

#validacion de jubilacion mediante condicionales ternarias
if($genero === 'masculino'){
    if($edad >= 60){
        echo "Al tener una edad de {$edad} anios y ser de genero {$genero}, usted ya puede jubilarce";
    }
    elseif($edad < 60 and $edad > 0){
        echo "La edad que tiene {$edad} anios para ser de genero {$genero}, no cumple con el requisito de edad para Jubilarce.";
    }
    else{
        echo "lo siento la edad de $edad no corresponde a nuestros parametros, siendo de genero $genero";
    }
}
elseif ($genero === 'femenino'){
    if($edad >= 54){
        echo "Al tener una edad de {$edad} anios y ser de genero {$genero}, usted ya puede jubilarce";
    }
    elseif($edad < 54 and $edad > 0){
        echo "La edad que tiene {$edad} anios para ser de genero {$genero}, no cumple con el requisito de edad para Jubilarce.";
    }
    else{
        echo "lo siento la edad de $edad no corresponde a nuestros parametros, siendo de genero $genero";
    }
}
else {
    echo "Lo siento el genero que introduciste $genero no corresponde a un genero permitido o existente"; 
}