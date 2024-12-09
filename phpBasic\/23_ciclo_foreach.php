<?php
/*
El ciclo foreach se utiliza unicamente para iterar arrays, ya que si se intenta iterar con variables 
comunes esta mandara un error de sintaxis

SINTAXIS:
foreach ($array as $valor){
    codigo a ejecutar
    $valor tendra cada iteracion un valor del array
}

foreach ($array as $clave => $valor){
    codigo a ejecutar
    $clave tendra cada iteracion un clave del array
    $valor tendra cada iteracion un valor del array
}

Ejemplo:
*/

#arays
$laptop = ["acer nitro 5", "windows 11", " AMD ryzen 5", "SSD 250","RAM 31"];

$fruta = [
    "fresa"=>100,
    "papaya"=>80,
    "mango"=>50,
    "sandia"=>90,
    "melocoton"=>30,
    "uva"=>55
];

#bucle foreach forma 1
foreach($laptop as $caracteristicas){
    echo "Contiene {$caracteristicas}"."<br/>";
}

#bucle foreach forma 2
foreach($laptop as $elemento => $caracteristicas){
    echo "Contiene $elemento {$caracteristicas}"."<br/>";
}

#bucle foreach forma 1
foreach($fruta as $precio){//cuando mo mensionas la clave esta se itera de acuerdo al orden que tiene el array
    echo "Precio es {$precio}"."<br/>";
}

#bucle foreach forma 2
foreach($fruta as $elemento => $Precio){
    echo "El precio de la $elemento es {$Precio} soles"."<br/>";
}