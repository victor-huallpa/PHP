<link rel="stylesheet" href="css/styled.css">
<?php  include('includes/head.php')?>
    <!-- <style>
        form{
            background-color: pink;
            border-radius:5px;
            border-color: #17202A;
            color: #0E6251;
            padding:20px;
            margin:0 auto;
            width: 300px;
        }

        input, boton menor{
            border:0;
        }
        .one{
            border:solid 1px #ccc;
            padding: 10px;

            width: 280px;
        }
    </style> -->
    <form action="logical/index_logica.php" method="post">
    
        <div class="login-box">
            <h1>INICIO SESION:</h1> 
            
            <div class="user-box">       
                <input type="text" placeholder="correo" name="mail">
            </div>
            <div class="user-box"> 
                <input type="password" placeholder="pasword" name="pasword">
            </div>
            <input type="submit" value="enviar" class="modern-button">
            <br>
            <br>
            
            <div class="tex">
            No cuenta con una cuenta <a href="views/registro.php">REGISTRATE.</a>
            </div>
        </div>

    </form>

<?php  include('includes/footer.php')?>
