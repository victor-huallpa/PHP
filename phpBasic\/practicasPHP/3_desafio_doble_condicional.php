<?php
/*
Crea un algoritmo que calcule el total a pagar
una persona va a una llantaria a comprar dos tipos de llanstas
de 5800 soles compra menos de 5
de 700 soles compra mas de 5
*/
//variables
$precio_llanta1 = 5800;
$precio_llanta2 = 700;

$llanta1 = 2;
$llanta2 = 6;
//validacion mediante condicionales
if($llanta1 < 5 and $llanta2 > 5){
    //obtenicon de precios total de cada tipo de llanta comprada
    $precio1 = $precio_llanta1*$llanta1;
    $precio2 = $precio_llanta2*$llanta2;
    //clcular preico total a pagar
    $total = $precio1 + $precio2;
}
else {
        //obtenicon de precios total de cada tipo de llanta comprada
        $precio1 = $precio_llanta1*$llanta1;
        $precio2 = $precio_llanta2*$llanta2;
        //clcular preico total a pagar
        $total = $precio1 + $precio2;
}
//impreison de pago
echo "El precio que pagara por la compra de {$llanta1} de tipo 1 y compra de {$llanta2} de tipo 2 es  de : {$total} soles";
