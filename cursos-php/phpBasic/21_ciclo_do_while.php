<?php
/*
El ciclo do while es similar al de while, con diferencia que este antes de validar el codigo si es verdadero
ejecuta el codigo y despues evalua la veracidad
SINTACIS:
do{}
    codigo a ejecutar
}while( validacion de la condicon)

Ejemplo
*/

#variables
$valor = 1;

#do while incremento
do{
    echo "valor {$valor}";
    echo'<br/>';
    ++$valor;
}
while($valor <= 5);

#do while decremento
do{
    --$valor;
    echo "valor {$valor}";
    echo'<br/>';
}
while($valor <= 6 and $valor >= 2);