<?PHP
function imprimirO($result, $ope){
    echo 'la '.$ope.' es: '.$result;
}
$val1 = $_POST['valorA'];
$val2 = $_POST['valorB'];
if ($_POST){
    $operacion = $_POST['operacion'];
    switch($operacion){
        case 'sumar':
            $resultado = $val1+$val2;
            imprimirO($resultado,$operacion);
        break;
        case 'resta':
            $resultado = $val1-$val2;
            imprimirO($resultado,$operacion);
        break;
        case 'divicion':
            $resultado = $val1/$val2;
            imprimirO($resultado,$operacion);
        break;
        case 'multiplicacion':
            $resultado = $val1*$val2;
            imprimirO($resultado,$operacion);
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA AUTOMATICA</title>
</head>
<body>
    <form action="ejercicioPractico2.php" method="post">
        valor 1:
        <input type="text" name="valorA" id="">
        <br>
        valor 2:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" name="operacion" value="sumar">
        <input type="submit" name="operacion" value="resta">
        <input type="submit" name="operacion" value="divicion">
        <input type="submit" name="operacion" value="multiplicacion">
    </form>
</body>
</html>