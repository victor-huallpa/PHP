<?php
/*
En un almacen se hace el 20% de descuento a los clientes cuya compra supera los $100 
cual sera la cantidad que pagara una persona que consuma $100?
*/

#variables
$descuento = 1/5;
$consumo = 129;
if($consumo >= 100){
    echo "Consumio $ {$consumo} por ende se le aplicara el descuento del 20%";//interpolado de variables y texto
    echo'<br/>';
    $consumo = $consumo - $consumo*$descuento;
}
echo "Pagara $ {$consumo}";
