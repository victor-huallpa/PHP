<?php 
if($_POST){
    $valA = $_POST['valorA'];
    $valB = $_POST['valorB'];

    $suma = $valA+$valB;//suma 
    $resta = $valA-$valB;//resta
    $divi = $valA/$valB;//divicion
    $multi = $valA*$valB;//multiplicacion
    $potencia = $valA**$valB;//potenciacion
    $resto = $valA%$valB;//resto, cuando se realiza la divicion de dos dunemor y no es una divicion exacta
    echo  'el resultado es: '.$resto.`{$suma} </br> {$resta} `;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio08.php" method="post">
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
