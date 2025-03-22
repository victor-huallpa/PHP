<?php
$nombreA = 'archivos/archivo.txt';// Nombre del archivo a editar
// Verificar si el archivo existe
if (file_exists($nombreA)) {
    $archivoCreate = fopen($nombreA, "r");// Abrir el archivo en modo lectura ("r")
    $contenidoA = fread($archivoCreate, filesize($nombreA));// Leer el contenido del archivo
    fclose($archivoCreate);// Cerrar el archivo después de leer su contenido
} else {
    $contenidoA = "";// Si el archivo no existe, inicializar el contenido como vacío
}
// Si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contenidoA = $_POST['txt'];// Obtener el contenido ingresado por el usuario en el formulario
    $archivoCreate = fopen($nombreA, "w");// Abrir el archivo en modo escritura ("w") para sobrescribir el contenido
    if ($archivoCreate) {
        fwrite($archivoCreate, $contenidoA);// Escribir el nuevo contenido en el archivo
        fclose($archivoCreate);// Cerrar el archivo después de escribir el contenido
        echo "Archivo editado y contenido guardado correctamente.";// Mensaje de éxito
    } else {
        echo "No se pudo abrir el archivo.";// Mensaje de error si no se puede abrir el archivo
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar archivo</title>
</head>
<body>
    <!-- Formulario para editar el contenido del archivo -->
    <form action="ejercicio38.php" method="post"> <!-- Asegúrate de que el action apunte al archivo PHP correcto -->
        <!-- Textarea para mostrar y editar el contenido del archivo -->
        <textarea name="txt" id="" cols="30" rows="10"><?php echo htmlspecialchars($contenidoA); ?></textarea><br>
        <!-- Botón para enviar el formulario y guardar los cambios en el archivo -->
        <input type="submit" value="Guardar archivo">
    </form>
</body>
</html>
