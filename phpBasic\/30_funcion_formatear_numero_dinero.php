<?php
/*
Esta fucnion ayuda a delimitar con separadores espesificos que desees las cantidades nuemricas
number_format(cantidad, decimales, sep_decimal, sep_millar)

-CANTIDAD: es el monto que se foramteara
-DECIMALES: es la cantidad de decimales que cosnideraran al formatear la cantidad
-SEP_DECIMAL: es el separador decimal que se le colocara a l acantidad a foramtear
-SEP_MILLAR: es el separador desdes de cada mil que se le aplicara a la cantidad foramteada

Ejemplo:
*/
#varaible
$cantiadad = 3445.897;

#funcion predefinida para formatear las cantiadades
$retorno = number_format($cantiadad, 2,'{', '/');

#imprimimos el restorno de la funcion predefinida
echo $retorno;

/*
NOTA: esta funcion se puede usar con solo el primer parametro, los dos primeros parametros o los cuatro parametros
      no se peude usar solo tres devido a las restrinciones que tiene a fucnion. recomendamos revisar la documentaiocn

LINK: https://www.php.net/manual/es/function.number-format.php
*/
