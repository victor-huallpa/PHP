<?PHP
//array con indice editable
$arreglo = array('p'=>'pera','m'=>'manzana','l'=>'lechuga');
$arreglo2 = array('arroz','lentejas','ceriales');
// print_r($arreglo);
foreach ($arreglo as $indice => $valor){
    // echo $valor.'</br>'; //es una forma de leerlo
    echo $arreglo[$indice].'</br>';
    echo "el valor es: ".$valor.' del indice '.$indice.' </br> ';
}
// print_r($arreglo2);
?>