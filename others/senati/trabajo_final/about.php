<?php //error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Terminos y condiciones </title>
   

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<?php include_once('includes/header.php');?>
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Descripcion de los Terminos y Condiciones</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="about.php">Consultas</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="" alt="Image">
                        </div>
                    </div>
                    <center>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>1.-Aceptacion de los terminos y condiciones</p>
                            <span>
                            Al acceder y utilizar el sitio web del Hotel, aceptas cumplir y estar sujeto a los siguientes términos y condiciones. Si no estás de acuerdo con estos términos, te recomendamos que no utilices nuestro sitio web.
                        </div>

                        <div class="section-header text-left">
                            <p>2.-Uso del sitio web</p><br>
                            <span>
                            a. El contenido proporcionado en este sitio web es solo para información general y puede estar sujeto a cambios sin previo aviso.
                            <br>
                            b. No permitimos el uso indebido, la alteración o la interferencia del funcionamiento normal del sitio web. Esto incluye, pero no se limita a, cualquier actividad que pueda dañar, deshabilitar o sobrecargar nuestro sitio web o los servidores en los que se encuentra alojado.
                            <br>
                            c. No garantizamos que el sitio web estará siempre disponible y libre de errores. Nos reservamos el derecho de interrumpir, suspender o modificar el acceso al sitio web en cualquier momento y sin previo aviso.                        
                            </span>
                        </div>

                        <div class="section-header text-left">
                            <p>3.-Reservas y pagos</p><br>
                            <span>
                            a. Para hacer una reserva a través de nuestro sitio web, debes proporcionar información precisa y completa, incluyendo tus datos personales, fechas de estancia y preferencias. Al enviar una reserva, aceptas que toda la información proporcionada es verdadera y precisa.                       
                            <br>
                            b. El pago de la reserva se realizará de acuerdo con las políticas y métodos de pago establecidos por el Hotel. Nos reservamos el derecho de solicitar información adicional o rechazar una reserva si consideramos que la información proporcionada es incorrecta o fraudulenta.
                            <br>
                            c. Todas las tarifas mostradas en nuestro sitio web están sujetas a cambios sin previo aviso. Se te informará sobre el precio final al momento de confirmar tu reserva.
                            </span>

                        <div class="section-header text-left">
                            <p>4.-Cancelaciones y Modificaciones de Reservas</p><br>
                            <span>
                            a. Las cancelaciones y modificaciones de reservas están sujetas a las políticas establecidas por el Hotel y pueden implicar cargos adicionales. Te recomendamos revisar cuidadosamente las políticas de cancelación al momento de hacer tu reserva.                        
                            <br>
                            b. Nos reservamos el derecho de cancelar una reserva en caso de circunstancias imprevistas o fuera de nuestro control. En tal caso, te notificaremos lo antes posible y te ofreceremos alternativas o un reembolso completo, según corresponda.
                            </span>

                        <div class="section-header text-left">
                            <p>5.-Responsabilidad y Exoneración</p><br>
                            <span>
                            a. El uso de nuestro sitio web es bajo tu propio riesgo. No nos hacemos responsables de cualquier daño directo, indirecto, incidental, especial o consecuente que surja del uso o la incapacidad de utilizar nuestro sitio web.
                            <br>
                            b. No nos responsabilizamos por el contenido de sitios web de terceros a los que puedas acceder a través de enlaces en nuestro sitio web. Estos enlaces se proporcionan solo como referencia y no implica nuestro respaldo o aprobación del contenido.
                            </span>

                        <div class="section-header-center">
                            <p>6.-Privacidad y Protección de Datos</p><br>
                            <span>
                            a. Nuestra política de privacidad establece cómo recopilamos, utilizamos y protegemos tus datos personales. Al utilizar nuestro sitio web, aceptas nuestra política de privacidad.
                            </span>

                        <div class="section-header-center">
                            <p>6.-Privacidad y Protección de Datos</p><br>
                            <span>
                            Estos términos y condiciones se regirán e interpretarán de acuerdo con las leyes de Perú. Cualquier disputa relacionada con estos términos y condiciones se someterá a la jurisdicción exclusiva de los tribunales de Perú.
                            <br>
                            <span>
                            Si tienes alguna pregunta o inquietud sobre nuestros términos y condiciones, por favor, contáctanos a través de los canales de contacto proporcionados en nuestro sitio web.
                            <br>
                            <span>
                            Al utilizar nuestro sitio web, confirmas que has leído, entendido y aceptado estos términos y condiciones.
                            </span>
</div>
                    </center>
                    
                            
                        <div class="about-content">
<?php 
$sql = "SELECT type,detail from tblpages where type='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{       
?>
<p>
    
                            <?php   //echo $result->detail; ?> 

                            </p>
                        <?php } ?>
                        <hr />                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        



  

<?php include_once('includes/footer.php');?>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
