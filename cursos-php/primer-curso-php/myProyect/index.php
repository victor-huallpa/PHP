<?php 
include_once "cabecera.php";
// include_once "portafolio.php";
class IndexP{
    private $consulta;
    function __construct(){
        $this->consulta = new Consultas();
    }
    public function showData(){
        $this->consulta=$this->consulta->consultaPMostrar();
        foreach($this->consulta as $dato){
            echo '    
                <div class="col">
                    <div class="card">
                        <img src="galeria/'.htmlspecialchars($dato['imagen']).'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">'.htmlspecialchars($dato['nombre']).'</h5>
                            <p class="card-text">'.htmlspecialchars($dato['descripcion']).'</p>
                        </div>
                    </div>
                </div>';
        }
    }

}
$indexP = new IndexP();
?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Bienvenid@s a mi PORTAFOLIO</h1>
            <p class="col-md-8 fs-4">
                Pagina donde podras revisar cada detalle de los cursos en PHP,
                tendras acceso a cada uno de estos cursos solo dale followe a mi myPage.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Mas informacion
            </button>
        </div>
    </div>
    
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php $indexP->showData();?>
</div>

<?php include_once "pie.php"?>

