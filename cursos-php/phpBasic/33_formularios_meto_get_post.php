<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Metodo Get y Post</title>
</head>
<body>
    <form action="33_index.php" method="get"><!--los formularios en html son con la etiqueta form y dontro el atributo action define la ruta que deseamos e nviar el formulario y methot define el metodo que eseamos usar sea get o post  -->
        <div class="">
            <label for="nombre"></label>
            <input type="text" name="nombre" id="nombre" placeholder="ingrese su nombre">
        </div>
        <br>
        <div class="">
            <label for="asignatura"></label>
            <select name="asignatura" id="asignatura">
                <option value="Ingles">Ingles</option>
                <option value="Matematicas">Matematicas</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Lenguaje">Lenguaje</option>
            </select>
        </div>
        <br><br>
        <label for="option-1" class="option-1">
            <input type="checkbox" name="Frutas" id="option-1" value="Manzana">
            Manzana
        </label>
        <br>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

