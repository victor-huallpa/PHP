<?php
/*
El operador ternario es la manera de evaluar al igual que una condicional doble, pero en este caso en una 
sola line de cogido,
estructura:
<condicional>?<operacion en caso true>:<opearcion en caso false>
*/
//ejemplo:
$gramatica = ('hello' == 'hi')? 'dramatica del ingles': 'algo esta mal';
echo $gramatica;

(2 == 2)? $total = 5+2: $total = 5+1;
echo $total;

#NOTA: las unicas formas de imprimir el resultado del operador ternario son como se muestrar anterior mente
#solo se usan para evaluar operaciones basicas