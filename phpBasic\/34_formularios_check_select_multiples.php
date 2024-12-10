<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Metodo Get y Post</title>
</head>
<body>
    <form action="34_index.php" method="post"><!--los formularios en html son con la etiqueta form y dontro el atributo action define la ruta que deseamos e nviar el formulario y methot define el metodo que eseamos usar sea get o post  -->
        <br>
        <div class="">
            <label for="asignatura">Asignaturas</label>
            <select name="asignatura[]" id="asignatura" multiple>
                <option value="Ingles">Ingles</option>
                <option value="Matematicas">Matematicas</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Lenguaje">Lenguaje</option>
            </select>
        </div>
        <br><br>
        <label for="option-1" class="option-1">
            <input type="checkbox" name="Frutas[]" id="option-1" value="Manzana">
            Manzana
        </label>
        <label for="option-2" class="option-1">
            <input type="checkbox" name="Frutas[]" id="option-2" value="Pera">
            Pera
        </label>
        <label for="option-3" class="option-1">
            <input type="checkbox" name="Frutas[]" id="option-3" value="Fresa">
            Fresa
        </label>
        <br>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>