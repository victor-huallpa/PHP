<?PHP
//array
define("nombre","victor");// constante user

$fruit = array('manzana','pera','lucuma');
// print_r($fruit);

// echo $fruit[1];
// for ($i = 0; $i < 3;$i++){  //metodo for para iterar el array
//     echo $fruit[$i].'</br>';
// }
$i = 0;
// do{ '' metodo do while
//     echo $fruit[$i].'</br>';
//     $i++;
// }
// while($i < 3)

while($i <= 2){//ietracion mediante while
    echo $fruit[$i].'</br>';
    $i++;
}
?>