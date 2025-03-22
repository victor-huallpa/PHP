<?php
/*
El ciclo For a comparacion del ciclo while, este ayuda a iterar una determinada cantidad de repeticiones
y otra diferencia es que for incluye dentro de su sintaxis el incremeento o decremetno automaticamente 
de esta variable

SINTAXIS:

for (var; condicional ; varaible a incrementar o decrementar){
    codigo a ejecutar si se cumple la condicional
}

for (variable; condicional ; varaible a incrementar o decrementar):
    codigo a ejecutar si se cumple la condicional

enddor;


ejmplos:
*/

#ciclo for decremetno
for($contador = 5; $contador > 0 ; $contador--){
    echo "El numero es {$contador}";
    echo'<br/>';
}


/*
NOTA: tener en cuenta que al igual que en otros bucles este se peude detener con break
*/