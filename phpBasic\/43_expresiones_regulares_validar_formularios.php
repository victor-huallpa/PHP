<?php
/*
las expresiones regulares son un patron de caracteres que definen un patron de busqueda

se utilizan para buscar una o varias convinaciones de busquedas en un texto

En programaicon, las expresiones regulares son un metodo por el cual podemos realizar busquedas
dentro de una cadena de caracteres.
*/

#en esta ocacion usaremos la funcion predefinida 
#preg_match("expresion regular",''parametro que sera evaluado) que ayuda a verificar si la cade de texo cumple con los parametros establecidos en el back and


#validacion
if(!empty($_POST['nombre'])){
    if(!preg_match("/^[a-zA-Z]{5,10}$/",$_POST['nombre'])){//tener cuidado como validas las expresiones regulares
    $respuesta = 'lo siento el texo ingresado no cumple con las expresiones regulares establecidas';
    }else{
        $respuesta = 'El texto ingreado cumple con las expresiones regulares establecidas';
    }
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
    <form action="43_expresiones_regulares_validar_formularios.php" method="post">
        nombre
        <br>
        <input type="text" name="nombre" id="nombre" placeholder="nombre" pattern="[a-zA-Z]{5,10}" maxlength="10"><!-- 
        Con el atributo pattern se estamos asignando caracteres permitidos al momento de ingresar datos 
        y tambein lo que ponemos entre llaves es el rango de caracteres que esta permitido en la entrada, y con el atributo maxlength le decimos la cantidad maxima de caracteres que se 
        puede escribir es 10-->

        <button type="submit">comprovar</button>
    </form>
    <br>
    <?php echo (!empty($respuesta))? $respuesta: ''; ?>
</body>

</html>

