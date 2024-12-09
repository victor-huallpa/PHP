<?php
/*
En este caso usaremos una fucnion predefinida para tranforma los caracteres de un string a array
'exploide'

SINTAXIS:
explode(delimitador,variable,limite)

El limitador es desde la parte que delimitara el string.
La varaible es el estring o cadena de texo que se le pasara y convertira en array
El limite es el parametro que le damos para limitar la cantidad de dicion que tendra el estring "numero de elementos que tendra el array"
tener en cuenta que el limite no es obligatorio ponerlo a menos que tengas un deternimanod nuemro de elementos que queiras obtener
Ejemplo:
*/

#variables
$fecha1 = '2024/12/10';
$fecha2 = '2024-12-15';
$numero = 'uno dos tres cuatro cinco seis';

#fucnion predefinida 
$retorno = explode('/', $fecha1);//separa la cadena de texto cuando encuentra /
$retorn = explode('/', $fecha1, 2);//separa la cadena de texto cuando encuentra / y elemos retornados 2
$retorno1 = explode('-', $fecha2);//separa la cadena de texto cuando encuentra -
$retorn1 = explode('-', $fecha2, 1);//separa la cadena de texto cuando encuentra - y elemos retornados 1
$retorno2 = explode(' ', $numero);//separa la cadena de texto cuando encuentra un espacio vacio ' '
$retorn2 = explode(' ', $numero, 4);//separa la cadena de texto cuando encuentra un espacio vacio ' ' y elemos retornados 4

#imprimimos el retorno de la fucnion predefinida que convierte 
echo $retorno[1];
echo '<br>';
echo $retorn[1];
echo '<br>';
echo '<br>';
echo $retorno1[0];
echo '<br>';
echo $retorn1[0];
echo '<br>';
echo '<br>';
echo $retorno2[1];
echo '<br>';
echo $retorn2[3];
echo '<br>';
