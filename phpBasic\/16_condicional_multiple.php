<?php
/*
La condicional multiple ayuda a evaluar dos casos que puedan ser veraces y uno en caso no
estructura:
if          evalua si es verdad
elseif      evalua si es verdad
else        en caso que las anteriores sean falsas
*/
#ejemplo
/*
algoritmo que detecte los dias de la semana mediante numeros insertdos
 */
//variable
$numero = 'hol';

if($numero === 1){
    $dia = 'lunes';
}
else if ($numero === 2){
    $dia = 'martes';
}

else if ($numero === 3){
    $dia = 'miercoles';
}
else if ($numero === 4){
    $dia = 'jueves';
}
else if ($numero === 5){
    $dia = 'viernes';
}
else if ($numero === 6){
    $dia = 'sabado';
}
else if ($numero === 7){
    $dia = 'domingo';
}
else {
    echo "Lo que ingresaste {$numero} no correste a un numero";
}

echo "El dia de la semana es {$dia}";

echo'<br/>';

/*
En una fabrica de computadoras se planea ofrecer a los clientes un 
descuento que dependera del numero de coputadoras que compre. si las computadoras son menores de 5 se les dara un 10%
de desceunto sobre el total de la compra, si el numero de computadoras es mayor o igual a 5 pero menor a 10 se le otorga 20% de descuento,
y si son 10 o mas computadoras se les da un des cuento del 40%. El precio de cada computadora es de 700 soles.
*/
echo'<br/>';
// variables

$numeroCompra = 4;
$preioComputadora = 700;

if ($numeroCompra < 5 and $numeroCompra > 0){
    $pago = $preioComputadora * $numeroCompra;
    $pagoTotal = $pago*0.9;
    echo "El monto {$numeroCompra} computadoras es un total de {$pagoTotal} soles";
}
else if ($numeroCompra >= 5 and $numeroCompra < 10){
    $pago = $preioComputadora * $numeroCompra;
    $pagoTotal = $pago*0.8;
    echo "El monto {$numeroCompra} computadoras es un total de {$pagoTotal} soles";
}
else if ($numeroCompra >= 10 ){
    $pago = $preioComputadora * $numeroCompra;
    $pagoTotal = $pago*0.6;
    echo "El monto {$numeroCompra} computadoras es un total de {$pagoTotal} soles";
}
else {
    echo "El monto ingresado {$numeroCompra} es invalido";
}