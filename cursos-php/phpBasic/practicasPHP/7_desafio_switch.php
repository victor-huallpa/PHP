<?php
/*
Se desea dise;ar un programa que escriba los nombres de los dias de la semana en funcion 
del valor de una varibale llamada dia.

Los dias de la semana son 7, por consiguiente el rango de los valores de la variable seran de 
1 a 7, en caso que la variable tome otros valores este mostrara un mensaje de error
*/

#variables
$dia = 'hola';

#switch
switch($dia){
    case 1:
        echo "El dia de la semana es Lunes ya que este dia toma el valor de {$dia}";
    break;
    case 2:
        echo "El dia de la semana es Martes ya que este dia toma el valor de {$dia}";
    break;
    case 3:
        echo "El dia de la semana es Miercoles ya que este dia toma el valor de {$dia}";
    break;
    case 4:
        echo "El dia de la semana es Jueves ya que este dia toma el valor de {$dia}";
    break;
    case 5:
        echo "El dia de la semana es Viernes ya que este dia toma el valor de {$dia}";
    break;
    case 6:
        echo "El dia de la semana es Sabado ya que este dia toma el valor de {$dia}";
    break;
    case 7:
        echo "El dia de la semana es Domingo ya que este dia toma el valor de {$dia}";
    break;
    default:
        echo "Lo introducido {$dia} no corresponde a ningun valor de los dias de la semana.";
    break;
}