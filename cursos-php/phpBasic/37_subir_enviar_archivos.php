<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envair o subir archivos al servidor</title>
</head>
<body>
    <form action="37_almacenar_archivo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo" placeholder="subri archivo" accept=".png, .jpeg, .jpg, ">
        <button type="submit">enviar</button>
    </form>
</body>
</html>