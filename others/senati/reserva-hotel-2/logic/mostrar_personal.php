<?php
include('conection.php');
$con=conn();

$q="SELECT * FROM personal";
$e = mysqli_query($con,$q);
?>
<!DOCTYPE html>
    <html>
    <head>
      <title>Perfil de Usuario</title>
      <!-- Enlace al archivo CSS personalizado -->
      <link rel="stylesheet" href="../css/styleU.css">
      
      <!-- Fuentes de Google -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    </head>
    <body>
        <?php
        while ($fila = mysqli_fetch_assoc($e)){
          $foto = $fila['foto'];
            ?>
      <div class="container">
        <div class="profile-card">
          <div class="profile-header">
          <img src="data:image/jpg;base64,<?php echo base64_encode($foto); ?>" class="profile-picture">
            
            <h1 class="profile-name"> <p><strong>Nombre:</strong> <?php echo $fila['nombre']; ?></p></h1>
            <p class="profile-bio">Descripción del usuario</p>
          </div>
          <div class="profile-details">
            <div class="detail-item">
              <span class="detail-label"></span>
              <span class="detail-value"><p><strong>Apellido:</strong> <?php echo $fila['apellido']; ?></p></span>
            </div>
            <div class="detail-item">
              <span class="detail-label"></span>
              <span class="detail-value"><p><strong>Cargo:</strong> <?php echo $fila['cargo']; ?></p></span>
            </div>
            <!-- <div class="detail-item">
                <span class="detail-label">Region:</span>
                <span class="detail-value">Puno</span>
              </div> -->
            <div class="detail-item">
              <span class="detail-label"></span>
              <span class="detail-value"><p><strong>Correo Electronico:</strong> <?php echo $fila['correo']; ?></p></span>
            </div>
            <div class="detail-item">
              <span class="detail-label"></span>
              <span class="detail-value"><p><strong>Celular:</strong> <?php echo $fila['celular']; ?></p>   </span>
            </div>
          </div>
        </div>
      </div>
      <?php 
}?>
    </body>
    </html>
    
