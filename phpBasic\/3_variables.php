<?php
/*Las variables son espacios de memoria donde se puede alacenar datos 'valores'
se representa como cajas donde se guradan valores, estos valores pueden ser modificados a futuro */

#las varibales empiezan con '$' simbolo de dolar
#Despues del signo sige el nombre de de la varibale y esta puede empesar con una letra o un guion bajo '_'
#Despues de nombrar la varible se le asigna el valor con el signo '='
//ejemplo;
$variable = 'Hello world';
$Variable = 'Hi world';
$_variable = 'Good bye world';
$_Variable = 'See you world';
echo $variable,'<br />';
echo $Variable,'<br />';
echo $_variable,'<br />';
echo $_Variable,'<br />';

#Estandares de las variables y nombrar una rariable
//Camel Case: el nombre al inicio de cada letra empiza con una mayuscula. Existen dos tipos:
//-upper case, la primera letra de cada palabra empieza con una mayuscula.
//-Lower case, todas las palabras empizan con mayuscula a ecepcion de la primera letra de la primera palabra.
//-Snake case, el nombre de la variable se separa por guiones bajos '_'
#ejemplo
$NombreVariable = 'Es upper case NombreVariable';
$nombreVariable = 'Es lower case nombreVariable';
$nombre_variable = 'Es snake case nombre_variable';

echo $NombreVariable,'<br />';
echo $nombreVariable,'<br />';
echo $nombre_variable,'<br />';

#Nota: existes nombres de varaibles predefinidas que tienen una funcion al invocarlas y nos dara error al imprimirlas, son bombre definidos.
# teneen cuenta que cada que imprimas o escribas codigo y termine un linea es recomendable colocalr punto y como ';' para finalizar la escritura
# los valores de las variables pueden cambair su valor definido. ejemplo.
$eje = 'hola';
echo $eje,'<br />';

$eje = 'valor cambiado';
echo $eje
?>