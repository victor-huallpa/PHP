<?php
/*
En esta parte entedeneromos como realizar selecciones multiples y checkbos multiples en formularios, con
esto me refiero que los datos que se mandan atravez del formulario se hacen mediante arrays
*/

var_dump($_POST['asignatura']);
echo '<br>';

#variables para guardar el metodo
$asignatura = $_POST['asignatura'];
$frutas = $_POST['Frutas'];

foreach($asignatura as $materia){
    echo $materia.'<br>';
}
echo '<br>';
foreach($frutas as $fruta){
    echo $fruta.'<br>';
}