<?php 
//valores boleano "true" and "false"
//ooperadores de comparacion  "<, >, >=, <=, ==, ===, != y !=="
//operadores logicos "|| y &&" y o
if($_POST){//if principal
    $valA = $_POST['valorA'];
    $valB = $_POST['valorB'];

    if($valA > $valB){//son valores boleanos con estos valores puedes deternimar si es verdadero o falso
        echo  'el valor A es mayor: '.$valA;
    }
    elseif($valA < $valB || $valA <= $valB){
        echo 'el valor b es mayo'. $valB;
    }
    elseif($valA != $valB && $valA > $valB){
        echo 'el valor '.$valA.' es mayor que '.$valB;
    }
    else {
        echo 'el valor a y b son iguales';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores logicos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
