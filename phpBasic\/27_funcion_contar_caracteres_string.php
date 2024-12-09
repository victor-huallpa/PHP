<?php
/*
Es otra fucion predefinida de php
En este caso contaremos la cantidad de careacteres que contine un tipo de datos string, int o float
Tambien usaremos una funcion que ayuda a contar las palabras que ahy en un string
*/

#variables
$string = 'hola mundo';
$entero = 456;
$decimal = 456.12;

#funcion predefinida para contar cantidad de caracteres de una varaible
$retorno = strlen($decimal);

#imprimimos el retorno de la ufncion predefinida
echo $retorno;// considera los espacio que existe dentro del string o el punto del decimal
echo '<br>';

#funcion predifinida par acontar cantidad de palabras qeu contiene un string
$retorno = str_word_count($entero);//en caso asemos datos numericos 'entero o float' esto lo contara como cero

#imprimimos el retorno de la funcion predifinida
echo $retorno;
echo '<br>';
