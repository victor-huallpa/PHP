<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envair o subir archivos al servidor con ajax</title>
</head>
<body>
    <form action="37_almacenar_archivo.php" method="post" enctype="multipart/form-data" class="FormularioAjax">
        <input type="file" name="archivo" id="archivo" placeholder="subri archivo" accept=".png, .jpeg, .jpg, ">
        <button type="submit">enviar</button>
    </form>


    <form action="37_almacenar_archivo.php" method="post" enctype="multipart/form-data" class="FormularioAjax">
        <input type="file" name="archivo" id="archivo" placeholder="subri archivo" accept=".png, .jpeg, .jpg, ">
        <button type="submit">enviar</button>
    </form>
    <script src="38_ajax.js"></script>
</body>
</html>

<!-- 
NOTA: tienes que agregar una clase al formulario para poder enviar los dato al escript una ves 
precionado el boton enviar -->