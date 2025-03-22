<?php
// subir documentos con 'input file'
$almacenar;
    if($_POST){
        //print_r($_POST); //imprimimos lo qe se envio atraves del input submit

        if($_FILES['archivo']['error'] == UPLOAD_ERR_OK){
            $almacenar = 'archivos/'. basename($_FILES['archivo']['name']);
            if(move_uploaded_file($_FILES['archivo']['tmp_name'],$almacenar)){
                echo 'el archivo se subio y guardo correctamete';
            }
            else{
                echo 'fallo al mover el archivo';
            }
        }else{
            echo 'hubu un error al subir el archivo';
        }

        // print_r($_FILES['archivo']); //se abstrae la informacion del documento que se subio

        // move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);//se mueve el archivo a un lugar donde se desea guardar.
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="ejercicio30.php" method="post">
        Imagen:
        <input type="file" name="archivo" id=""><br> <!--puedes enviar cualquier clase de archivo tienes que orientarlo al tipo de archivo que quieres enviar -->
        <input type="submit" value="enviar informacion" name="enviar">
    </form>
</body>
</html>