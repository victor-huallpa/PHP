<?php
include_once "cabecera.php";

// class Ejercicio {
//     private $ejercicioR;
//     public $ejercicioShow;

//     public function readFiles() {
//         $ejerciciosFiles = '../ejercicios';
//         $files = array_diff(scandir($ejerciciosFiles), array('.', '..'));
//         $ejercicioFiles = array_filter($files, function($file) {
//             return pathinfo($file, PATHINFO_EXTENSION) === 'php';
//         });
//         natsort($ejercicioFiles);
//         foreach ($ejercicioFiles as $file) {
//             if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
//                 $fileNameWithoutExtension = pathinfo($file, PATHINFO_FILENAME);
//                 echo '
//                 <div class="col">
//                     <div class="card">
//                         <iframe class="card-img-top" src="' . $ejerciciosFiles . '/' . htmlspecialchars($file) . '" title="Contenido Incrustado"></iframe>
//                         <div class="card-body">
//                             <h5 class="card-title">' . htmlspecialchars($fileNameWithoutExtension) . '</h5>
//                             <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
//                             <a href="' . $ejerciciosFiles . '/' . htmlspecialchars($file) . '">VER EJERCICIO</a>
//                         </div>
//                     </div>
//                 </div>';
//             }
//         }
//     }
// }

// $objejercicio = new Ejercicio();
class EjerciciosPhp{
    private $objconsulta;
    private $readData;
    function __construct()
    {
        $this->objconsulta = new Consultas();
    }
    public function readFiles(){
        $this->accesData();
    }
    public function accesData(){
        $this->objconsulta=$this->objconsulta->seleccionarEjercicio();
        $ruta = 'files/ejerciciosPHP/';
        foreach($this->objconsulta as $datos){
            echo '
                <div class="col">
                    <div class="card">
                        <iframe class="card-img-top" src="' . $ruta . '/' . htmlspecialchars($datos['archivo']) . '" title="Contenido Incrustado"></iframe>
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($datos['nombreE']) . '</h5>
                            <p class="card-text">' . htmlspecialchars($datos['descripcion']) . '</p>
                            <a href="' . $ruta . '/' . htmlspecialchars($datos['archivo']) . '">VER EJERCICIO</a>
                        </div>
                    </div>
                </div>';
        }
    }
}
$objejercicio = new EjerciciosPhp();
?>

<h1>EJERCICIOS PHP</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php $objejercicio->readFiles(); ?>
</div>

<?php
include_once "pie.php";
?>
