<?php
/*
Las condicionales anidadas son cunado dentro de una condicional se realizan mas condicionales con la
finalidad de obtener resultados precisos.
Ejemplo:
*/
#variables
$numero = 1.5;

#condicional
if($numero > 1 and $numero < 2){
    if ($numero === 1.1){
        echo "el numero es {$numero}";
    }
    elseif ($numero === 1.2){
        echo "el numero es {$numero}";
    }
    elseif ($numero === 1.3){
        echo "el numero es {$numero}";
    }
    elseif ($numero === 1.4){
        echo "el numero es {$numero}";
    }
    elseif ($numero === 1.5){
        echo "el numero es {$numero}";
    }
    elseif ($numero === 1.6){
        echo "el numero es {$numero}";
    }
    else {
        echo "el numero es {$numero} y no esta dentro del rango de 1.1 a 1.6";
    }
}
elseif($numero >= 2 and $numero < 3){
    echo "el numero es {$numero}";
}
else "el dato es invalido";
/*
NOTA: No se recomienda realizar muchas anidaciones de condicionales ya que esto puede generar un desorden
    por lo que no se puede llegar a entender bien la funcion que relaiza dichas lineas de codigo, mejor use 
    funciones.
*/