<?php
/*
Para detener o salir de ciclos o bucles se utiliza continue o break 
-BREAK detiene cualquier ciclo en la iteracion que este
-CONTINUE Se utiliza para saltar o umitir sierto elemento de una iteracion
Ejemplo:
*/

$contador = 1;

while($contador <= 20){
    echo $contador."<br>";
    if($contador === 10){
        echo 'se detubo el contador <br>';
        break;
    }
    ++$contador;
}
echo "<br>";

$numero = 1;

while($numero <= 20){
    if($numero === 10){
        echo 'este numero no se cosidera <br>';
        ++$numero;
        continue;
    }
    echo $numero."<br>";
    ++$numero;
}