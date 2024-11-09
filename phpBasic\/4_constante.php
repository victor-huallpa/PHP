<?php
/* las Constantes son iguales a las variables, son espacios de memoria
a acepcion que estas no pueden cambiar su valor */
#Existen dos tipos de constantes, una antigua y otra moderna .
#Las variables no inician con un signo de dolar '$' estas empiezan con difene o const se guido de una letra o guion bajo '_'
#Las constantes son key sensitib, sensibles a mayusculas y minusculas.
//ejemplo

#forma antigua
define("constante", 'hola mundo');

#A partir de php 5.5.0 forma moderna
const constanteDos = 'Hello World';

echo constante,'<br />';
echo constanteDos  ;

// define("constante", 'cambiar valor  ');
echo constante,'<br />';

/*Nota: 
-las constantes se pueden utilizar para definir variables que no tienen que cambiar su valor en el tiempo
ya sea para que puedan cumplir una sola funcion o almacenar datos que no requieren ser cambiados
-Existen constantantes definidas al igual que variables, por ende se recomienda leer la documentacion de php 
para saber cuales son estas constantes y varibles, y no tener problemas a nombar varaibles o constantes.*/