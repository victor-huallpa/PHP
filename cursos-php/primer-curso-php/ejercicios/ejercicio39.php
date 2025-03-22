<?php
$almacenar;
$selec;
if($_SERVER['REQUEST_METHOD']==='POST'){
    // echo 'hola';    
    // print_r($_FILES['pdf']);
    if(isset($_POST['formulario']) && $_POST['formulario'] === 'formulario1'){
        if($_FILES['pdf']['error']==UPLOAD_ERR_OK){
            $typoDpf = mime_content_type($_FILES['pdf']['tmp_name']);
            if($typoDpf === 'application/pdf'){
                $almacenar = 'archivos/'. basename($_FILES['pdf']['name']);
                if(move_uploaded_file($_FILES['pdf']['tmp_name'],$almacenar)){
                    echo 'se almaceno correctamente el PDF';
                    // echo $_FILES['pdf']['name'];
                }else{
                    echo 'no se pudo almacenar';
                }
            }else{
                echo 'el archivo subido no es un pdf por ende no se guardo';
            }
        }else{
            echo 'problemas al subir el PDF';
        }
    }elseif(isset($_POST['formulario']) && $_POST['formulario'] === 'formulario2'){
        $selec = (isset($_POST['pdfSelect']))?$_POST['pdfSelect']:'';
        echo 'selleccion correcta';
    }else{
        echo 'aun no hay nigun envio POST';
    }
}
function listar_pdfs($dir){
    $files = scandir($dir);
    $pdfs = array();
    foreach($files as $file){
        if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
            $pdfs[] = $file;
        }
    }
    return $pdfs;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar PDF</title>
</head>
<body>
    <form enctype="multipart/form-data" action="ejercicio39.php" method="post">
        <input type="hidden" name="formulario" value="formulario1">
        <input type="file" name="pdf" id=""><br>
        <input type="submit" value="subir PDF">

    </form>
    <form action="ejercicio39.php" method="post">
        <input type="hidden" name="formulario" value="formulario2">

        <select name="pdfSelect" id="">
            <option value="">[ninguno PDF]</option>
        <?php 
        $pdfsL = listar_pdfs('archivos');
        foreach($pdfsL as $pdf){
            ?>
            <option value="<?php echo htmlspecialchars($pdf)?>" <?php echo (isset($selec) && $selec == $pdf? 'selected':"");?>><?php echo htmlspecialchars($pdf)?></option>
            <?php
        };
        
        ?>
        </select>
        <br><input type="submit" value="seleccionar" name="showPDF">
    </form>
    <h1>Visualizador de PDF</h1>
<?php if(isset($selec) && $selec !== ''){?>
    <embed src="archivos/<?php echo htmlspecialchars($selec); ?>" type="application/pdf" width="600" height="400">
<?php } ?>
</body>
</html>
