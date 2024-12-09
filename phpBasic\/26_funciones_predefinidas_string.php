<?php
/*
Las funciones predefinidas son funciones que ya bienen con php y se pueden usar en cualquier momento
en este caso usaremos una fucion predefinida para formatear un dato tipo string en minuscula y convertirlo a 
mayuscula y viceversa
*/

#variable 
$string = 'HOLA';

#funcion predefinida QUE convierte caracterres mayusculas a minusculas
$mayus = strtolower($string);

#imprimimos el retrono de la fucnion predefinida
echo $mayus . '<br>';

#variable 
$string2 = 'hola';

#funcion predefinida QUE convierte caracterres minusculas a mayusculas
$mayus = strtoupper($string2);

#imprimimos el retrono de la fucnion predefinida
echo $mayus . '<br>';

#variable
$valor = 'hi';

#funcion predefinida que convierte la primera letra de una palabra en mayuscala
$fun = ucfirst($valor);

#imprimimos el retorno de la funcion predefinida
echo $fun . '<br>';

#variable
$valor = 'hi world';

#funcion predefinida que convierte la primera letra de todas las palabra de un string en mayuscala
$fun = ucwords($valor);

#imprimimos el retorno de la funcion predefinida
echo $fun . '<br>';

/*
NOTA: recomendamos leer la documentacion para saver mas sobre las funciones predefinidas, ya que son muy extensas
      y depende de la tarea que quieras realizar
*/