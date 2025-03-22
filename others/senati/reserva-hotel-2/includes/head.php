<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Ejemplo de Bootstrap</title>
  <style>
    body {
      margin-top: 60px;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var currentPath = window.location.pathname;
      var navLinks = document.querySelectorAll(".navbar-nav .nav-link");
      for (var i = 0; i < navLinks.length; i++) {
        var link = navLinks[i];
        if (link.getAttribute("href") === currentPath) {
          link.parentElement.classList.add("active");
          break;
        }
      }
    });
  </script>
</head>
<body>
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Configuracion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item ">
            <a class="nav-link" href="personal.php">personal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cliente.php">cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cuentas.php">cuentas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="habitacion.php">habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="caja.php">caja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registros.php">registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rentas.php">rentas</a>
          </li>

        </ul>
      </div>
    </nav>
  </header>