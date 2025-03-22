<?php
/*
Esta fucnion ayuda a optener la fecha actual ya sea de la zona horia o por defecto, tener en cuanta que para obtener
una fecha o hora se debe utilizar otra fucnion para obtener la zona horaria


SINTAXIS:

date_deafult_timezone_set('zona horaria que desaea utilizar de acuerdo a docuemntacion de php');

date("formato de la fecha que quieres mostar segun los estandares de la docuemtnacion")


NOTA: Tener en cuenta que el orden en que se muestra puede cambiar de acuerdo a lo que desees 
      Tambein se recomeinda leer la docuemntacion 
LINK:
funcion date: https://www.php.net/manual/es/function.date.php
funcion zona horaria: https://www.php.net/manual/es/function.date-default-timezone-set.php
*/

#funciones para optener el tiempo
date_default_timezone_set("America/Lima"); // definir la zona horaria de nuestro pais o de acuerdo a l anecesidad

$fecha_us = date("l jS \of F Y h:i:s A"); // definimos el formato de hora fecha y todos los factores de teimp oqeu requerimos

echo $fecha_us;// la fecha se imprime de acuerdo el idioma de creacion en este caso e ningles
echo '<br>';
echo '<br>';


#Ejemplo de fecha en espa;ol larga

function fecha_esapaniol(){
    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    $dias_semana = [
        "Monday"    => "Lunes",
        "Tuesday"   => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday"  => "Jueves",
        "Friday"    => "Viernes",
        "Saturday"  => "Sábado",
        "Sunday"    => "Domingo"
    ];

    $meses_year = [
        "01"   => "Enero",
        "02"  => "Febrero",
        "03"     => "Marzo",
        "04"     => "Abril",
        "05"       => "Mayo",
        "06"      => "Junio",
        "07"      => "Julio",
        "08"    => "Agosto",
        "09" => "Septiembre",
        "10"   => "Octubre",
        "11"  => "Noviembre",
        "12"  => "Diciembre"
    ];

    $fecha = $dias_semana[date('l')].' '.$fecha_dia.' de '.$meses_year[$fecha_mes].' de '.$fecha_year; 
    
    return $fecha;
}

$retorno = fecha_esapaniol();
echo $retorno;

echo '<br>';
echo '<br>';

#Ejemplo de fecha en espa;ol corta

function fecha_esapaniol_corta($fecha=""){//esta parte estamos dcieindo que el parametro pueda estar vacio o tenga algun valor en fecha

    if($fecha == ""){
        $fecha = date("d-m-Y");
    }else{
        $fecha = date("d-m-Y",strtotime($fecha));
    }

    $fecha = explode("-",$fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_year = $fecha[2];

    $meses_year = [
        "01"   => "Enero",
        "02"  => "Febrero",
        "03"     => "Marzo",
        "04"     => "Abril",
        "05"       => "Mayo",
        "06"      => "Junio",
        "07"      => "Julio",
        "08"    => "Agosto",
        "09" => "Septiembre",
        "10"   => "Octubre",
        "11"  => "Noviembre",
        "12"  => "Diciembre"
    ];

    $fecha = $fecha_dia.' de '.$meses_year[$fecha_mes].' del '.$fecha_year; 
    
    return $fecha;
}

echo fecha_esapaniol_corta("2024-10-10");



