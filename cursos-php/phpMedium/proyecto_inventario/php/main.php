<?php
//Realizar la conexion a la base de datos

function conexion (){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=inventario1', 'vi', 'vech');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
        #insertamos datos
    
        // $pdo->query("INSERT INTO Categoria(categoria_nombre,categoria_ubicacion) VALUES('prueba','ubicacion texto')");
        // echo "Conexión exitosa.";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
}

#verificaremos los datos
function verificar_datos($filtro, $cadena){
    if(preg_match("/^".$filtro."$/", $cadena)){
        return false;
    }else{
        return true;
    }
}

#Limpiar cadenas de texto
function limpiar_cadena($cadena){
    $cadena = trim($cadena);//La funcion trim lo que hace es limpiar esapacio en blanco de una cadena
    #esto es con la finalidad de evitar inyecciones de codigo 
    $cadena = stripslashes($cadena);//esta funcion elimina las barras
    $cadena = str_ireplace("<script>","",$cadena);//Reemplazar un texto mediante una busqueda
    $cadena=str_ireplace("</script>", "", $cadena);
    $cadena=str_ireplace("<script src", "", $cadena);
    $cadena=str_ireplace("<script type=", "", $cadena);
    $cadena=str_ireplace("SELECT * FROM", "", $cadena);
    $cadena=str_ireplace("DELETE FROM", "", $cadena);
    $cadena=str_ireplace("INSERT INTO", "", $cadena);
    $cadena=str_ireplace("DROP TABLE", "", $cadena);
    $cadena=str_ireplace("DROP DATABASE", "", $cadena);
    $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
    $cadena=str_ireplace("SHOW TABLES;", "", $cadena);
    $cadena=str_ireplace("SHOW DATABASES;", "", $cadena);
    $cadena=str_ireplace("<?php", "", $cadena);
    $cadena=str_ireplace("?>", "", $cadena);
    $cadena=str_ireplace("--", "", $cadena);
    $cadena=str_ireplace("^", "", $cadena);
    $cadena=str_ireplace("<", "", $cadena);
    $cadena=str_ireplace("[", "", $cadena);
    $cadena=str_ireplace("]", "", $cadena);
    $cadena=str_ireplace("==", "", $cadena);
    $cadena=str_ireplace(";", "", $cadena);
    $cadena=str_ireplace("::", "", $cadena);

    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);

    return $cadena;
}

#funcion para renombrar las fotos
function renombrar_fotos($nombre){
    $nombre=str_ireplace(" ", "_", $nombre);
    $nombre=str_ireplace("/", "_", $nombre);
    $nombre=str_ireplace("#", "_", $nombre);
    $nombre=str_ireplace("-", "_", $nombre);
    $nombre=str_ireplace("$", "_", $nombre);
    $nombre=str_ireplace(".", "_", $nombre);
    $nombre=str_ireplace(",", "_", $nombre);
    $nombre=$nombre."_".rand(0,100);
    return $nombre;
}

#funcion para paginar tablas
function paginador_tablas($pagina, $Npaginas, $url, $bototnes ){
    $tabla = '<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">';

    if($pagina <= 1){
        $tabla .= '<a class="pagination-previous is-disabled" disabled >Anterior</a>
        <ul class="pagination-list">';
    }else{
        $tabla .= '<a class="pagination-previous" href="'.$url.($pagina-1).'">Anterior</a> 
        <ul class="pagination-list">
            <li><a class="pagination-link" href="'.$url.'1">1</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            ';
    }

    $ci = 0;
    for($i = $pagina; $i <= $Npaginas; $i++){

        if($ci >= $bototnes) {
            break;
        }else{

        }

        if($pagina == $i){
            $tabla .= '<li><a class="pagination-link is-current" href="'.$url.$i.'">'.$i.'</a></li>';
        }else{
            $tabla .= '<li><a class="pagination-link" href="'.$url.$i.'">'.$i.'</a></li>';
        }

        $ci++;
    }

    if($pagina == $Npaginas){
        $tabla .= ' </ul>
                    <a class="pagination-next is-disabled" disabled >Siguiente</a>';
    }else{
        $tabla .= '
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" href="'.$url.$Npaginas.'">'.$Npaginas.'</a></li>
        </ul>
        <a class="pagination-previous" href="'.$url.($pagina+1).'">Sguiente</a> 
';
    }

    $tabla .= '</nav>';

    return $tabla;
}

// $nombre = 'Carlos7';

// if(verificar_datos("[a-zA-Z]{6,10}",$nombre)){
//     echo 'Los datos no cuinciden';
// }else{

// }
