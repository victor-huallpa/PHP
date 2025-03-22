<?php
/*
Algoritmo que calcule el total a pagar por la compra de camisas
si se compra 3 camisas o mas se le aplica un descuento de del 20% sobre el total a pagar
caso contrario solo se le aplica un descuente del 10% sobre el total de compra de camisas
Ten en cuenta que tienes que usar un operador ternario para realizar la evaluacion de la compra
*/
// variables
$numeroCamisas = 3;
$preicoCamisa = 25.00;
$totalPago = $numeroCamisas * $preicoCamisa;

//operador ternario para evaluar el descuento
$evaluar = ($numeroCamisas >= 3)? $totalPago*0.8: $totalPago*0.9;
//impresion de pago total ocn descuento
echo "El monto a pagar por la compra de {$numeroCamisas} camisas es de {$evaluar} soles";

