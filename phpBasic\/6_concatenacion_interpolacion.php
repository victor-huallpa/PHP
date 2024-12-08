<?php
#CONCATENAICON:
/*
La concatenacion es la forma en que se pueden unir varibles o constantes, dando forma a un neuvo resultdo.
Ejemplo:
*/
$nombre = 'Luis';

$edad = 34;

$nacionalidad = 'Peruana';
/*
La concatenacion se da mendiante el signo de PUTO '.' valor1.valor2
*/
echo $nombre.$edad.$nacionalidad,'<br />';


#INTERPOLACION
/*
La interpolacion es la manera en como se convinan las variables dentro de una cadena de texo.
-Estas se logra cuando la cadena de texto esta dentro de comillas doble '"', caso contrario lo tomara como texto a la varaible
-La varaible a interpolar se puede escribir dentro de llaves '{$variable}" o sin estas, ya que php las identifica
*/

echo "Mi nombre es $nombre, tengo {$edad} anios de edad y soy de naiconalidad $nacionalidad.",'<br />';
echo 'Mi nombre es $nombre, tengo {$edad} anios de edad y soy de naiconalidad $nacionalidad.','<br />';