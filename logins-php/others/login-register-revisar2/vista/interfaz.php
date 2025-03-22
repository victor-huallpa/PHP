<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar</title>
</head>
<body>
    <center>
    <h1>Registro De Asistencia</h1>
<!-- 
    <input type="text" placeholder="&#128102; ID" name="ID" required>
    <input type="password" placeholder="🔐 passwords" name="password" required> -->

    <h1>RELOJ</h1>
    <div id="reloj"></div>
    <?php //Ejemplo curso PHP aprenderaprogramar.com
    ?>
        <script>
            function displaytime() {
                var fecha = new Date();
                var hora = fecha.toLocaleTimeString();
                document.getElementById('reloj').innerHTML = hora;
                setTimeout(displaytime, 1000);
            }
            displaytime();
        </script>
    <br>
    <br>
    <form action="../logica/interfazl.php" method="post">
        <div>
            <h2>registrar</h2>

            <span>
                <label for="entrada">Hora de entrada:</label>
                <input type="checkbox" id="entrada" name="entrada">
                <label for="entrada">Hora de entrada almuerzo:</label>
                <input type="checkbox" id="entrada" name="entradaA">
                
            </span><br>
                <span>
                <label for="salida">Hora de salida:</label>
                <input type="checkbox" id="salida" name="salida">

                <label for="salida">Hora de salida almuerzo:</label>
                <input type="checkbox" id="salida" name="salidaA">
                <br>
                <input type="submit" value="registrar" name="btnregistrar" required>

            </span>


        </div>
    </form>
    </center>
</body>
</html>