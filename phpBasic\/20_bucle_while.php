<?php
/*
El bucle while es una parte de codigo que se ejecuta en bucle mientras sierta evalucion sera verdadera
en simples palabras True y cuando deja de ser verdadero este bucle se detiene.

Sintaxis
while(evaluaicion de condicional){
    valores o lineas de codig oque se ejecutaran si es verdadera la evaluacion;
    }
while evaluaicion de condicional:
    valores o lineas de codig oque se ejecutaran si es verdadera la evaluacion;
endwhile;
Ejemplo:
*/

#variables
$nume = 9;

#bucle con evalucion de valores
while ($nume >= 0 and $nume <= 9){

    echo "El numero que tienes es el {$nume}";
    echo '<br />';
    $nume--;
}

#bucle con valor true
$numero = 9;
$valor = true;

while ($valor){
    //codigo a ejecutar miestas sea verdare la evaluacion
    if($numero === 1){
        echo "Seleccionaste el numero {$numero} por ende termino el bucle.";
        echo '<br />';
        break; // forma de como detener un bucle cuando la evalucion es true
    }
    elseif ($numero < 10){
        echo "El numero que tienes es el {$numero}";
        echo '<br />';
        $numero--;
    }
    else{
        echo "El valor ingresado {$numero} no esta dentro de los parametros establecidos. ";
        echo '<br />';
        break;
    }
}




