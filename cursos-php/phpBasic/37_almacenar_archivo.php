<?php
/*
En este archivo resepcionaremos el arvhco enviado desde el formaulario y luego lo amacenaremos en el 
directorio de archivos_subidos
*/
#validamos el tipo de dato que desseamos resivir
#para esto usaremos la funcion mimen_content_type que ayuda a ver el tipo de dato de mime que se te=iene
if(mime_content_type($_FILES['archivo']['tmp_name']) != "image/jpeg" and mime_content_type($_FILES['archivo']['tmp_name']) != "image/png"){
    echo "el archivo no coinside con el formato solicitado";
    exit();
}

#restringir el peso del archivo antes de guardarlo
#primero calculamos el peso de larchivo

$peso_archivo = $_FILES['archivo']['size']/1024;//recuerde que size nos da el peso del archivo esta en bytes
                                                //y lo estamos convirtiendo a kilobytes
#validamos si el peso corresponde
if($peso_archivo > 30){
    echo "el archivo supera los tres megabyts";
    exit();
}

#comprobaremos si existe el directorio "archivos_subidos"
#para ello usaremos la fucnion FILE_EXISTS()

if(!file_exists('archivos_subidos')){
    if(!mkdir('archivos_subidos',0777)){
        echo 'error al crear e ldirectorio';
        exit();
    }
}

#cedemos permisos a la carpeta para poder alamcenar
chmod("archivos_subidos",0777);//teenre cuidado con los permisos de tu computador

#validamos si se cargo el archivo con la funcion move_uploaded_file, que devuelve true si el arhivo existe y false si no
#move_uploaded_file('rutadel archivo donde se encuentra','ruta a donde sea desea mover/copiar el archvio incluyendo el nombre del archvo')
if(move_uploaded_file($_FILES['archivo']['tmp_name'],'archivos_subidos/'.$_FILES['archivo']['name'])){
    echo 'Archivo subido con exito';
}else{
    echo 'Error al mover archvio o texto';
}

/*
NOTA: Tener cuidado con el sript en caso te mande el error de crear directorio o de subir archivo
      apesar de que el cdigo  este bien, el problema puede deberse a que tu servidor no tienen permisos 
      pra crear y modificar, por ende se le recomiendo dependiendo de l sistema operativo qu euse
      se le otorge estos permisos 
*/