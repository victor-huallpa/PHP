<?PHP

if($_POST){
    $boton = $_POST['switchb'];
    switch($boton){
        case 1:
            echo 'presionaste el boton 1';
        break;
        case 2:
            echo 'presionaste el boton 2';
        break;  
        case 3:
            echo 'presionaste el boton 3';
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        <input type="submit" value="1" name="switchb">
        <br>
        <input type="submit" value="2" name="switchb">
        <br>
        <input type="submit" value="3" name="switchb">
    </form>
</body>
</html>