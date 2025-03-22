<?php
//crear un algoritmo de calculadora
$val1 = $_POST['num1'];
$val2 =  $_POST['num2'];
$ope = strtolower($_POST['operacion']);

if($_POST && ($val1 != '' && $val2 != '') && ($val1 != null && $val2 != null) && ($ope != '' && $ope != null)){
    if ($ope === "suma"){
        $resultado = $val1 + $val2;
        echo 'la '.$ope.' es: '.$resultado;
    }
    elseif($ope === "resta"){
        $resultado = $val1 - $val2;
        echo 'la '.$ope.' es: '.$resultado;
    }
    elseif($ope === "multiplicacion"){
        $resultado = $val1 * $val2;
        echo 'la '.$ope.' es: '.$resultado;
    }
    elseif($ope === "divicion"){
        $resultado = $val1 / $val2;
        echo 'la '.$ope.' es: '.$resultado;
    }
    else{
        echo 'la operacion '.$ope.' aun no esta programada esperar un poco mas';
    }
}
else{
    echo 'algo salio mal';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <form action="ejercicioPractico.php" method="post">
        Numero 1
        <input type="text" name="num1" id="">
        <br>
        Numero 2
        <input type="text" name="num2" id="">
        <br>
        ingrese operacion: 
        <input type="text" name="operacion" id="" placeholder="suma, resta, divicion, multiplicacion">
        <br>
        <input type="submit" value="realizar operacion">
    </form>
    
</body>
</html>