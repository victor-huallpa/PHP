<?php
//Estas ejecutan o analizan dos condicionales si es verdadera 'True' o falsa 'False'
//if and alse
/*
esto ayuda a controlar cuando la condicional es falsa, permitiendo trabajar la falsedad de la condicional 
*/

#varaibles
$val1 = 45;
$val2 = 45;
//forma 1
if($val1 === $val2){
    echo 'Condicion verdadera';
    echo'<br/>';
}
else{
    echo 'La expresion es falsa';
    echo'<br/>';
}

//forma dos
if($val1 != $val2):
    echo 'La expresion es verdadera';
    echo'<br/>';
else:
    echo 'La expresion es falsa';
    echo'<br/>';
endif;//final y cierre de la condicional