<!DOCTYPE html>
<html>
<head>
    <title>Formulario de inicio de sesión</title>
    <style>
        /* Estilos de CSS */
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #ff66b3;
            box-shadow: 0 0 5px rgba(255, 102, 179, 0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #ff66b3;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }

        button:hover {
            background-color: #ff4081;
        }

        .message {
            margin-top: 20px;
            text-align: center;
            color: #888;
        }

        .message a {
            color: #4CAF50;
        }

        .error,
        .success {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 3px;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <form id="login-form">
            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="Usuario">

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Contraseña">

            <button type="submit">Iniciar sesión</button>
        </form>
        <div class="message">
            ¿No tienes una cuenta? <a href="#">Regístrate</a>
        </div>
    </div>

    <script>
        // Código JavaScript
    </script>
</body>
</html>
