<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <center>
        <p><h2>REGISTRARCE</h2></p>
        <p>Datos principales</p>
    <form action="../logica/registrar.php"  method="post">
        
            <input type="text" name="usuario" placeholder="usuario">
            <br>
       
            <input type="password" name="clave" placeholder="password">
            <br>
            <h5> marcar si eres instructor:<input type="checkbox" name="checkbox"></h5> 
            <br><br>
            
       
            <th><input type="submit" name="validar" value="registrarce"></th>
            <br><br><br>
            <a href="../index.php">ya tengo una cuenta</a>
        </center>
        
    </form>
</div>
    
</body>
</html>