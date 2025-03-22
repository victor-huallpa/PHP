<?php
//archivo que se lee 
$archivo = 'archivos/'."contenido.txt";

$archivoAbierto = fopen($archivo,"r");

$contenido = fread($archivoAbierto,filesize($archivo));

echo $contenido;
?>