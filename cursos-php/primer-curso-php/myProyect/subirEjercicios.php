<?php
//subiendo archivos de ejercicios realizados durante toda la semana
require_once 'consultas.php';
session_start();

class SubirEjercicios{
    //proiedades
    private $fileE;
    private $almacenarA;
    private $nombreI;
    //mesaje
    public $nombreM;
    public $archivoM;
    public $descripcionM;
    //Borrar datos de los ejercicios
    public function dataValidate($datos){
        if(isset($datos['id']) && isset($datos['archivo'])){
            $id = filter_var($datos['id'], FILTER_SANITIZE_NUMBER_INT);
            $archivo = filter_var($datos['archivo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $dato = [$id, $archivo];
            $this->dataDelete($dato);
            unlink('files/ejerciciosPHP/'.$datos['archivo']);
            // echo 'lolo'.$id.$archivo;
        }
    }
    private function dataDelete($datos){
        $consultarD = new Consultas();
        $consultarD->deleteEjercicio($datos);
    }
    
    //mostrar datos subidos
    public function pedirDatoA(){
        $consulta = new Consultas();
        $consulta = $consulta->seleccionarEjercicio();
        // print_r($consulta);
        $this->dataShow($consulta);
    }
    private function dataShow($datos){
        foreach($datos as $dato){
            echo '
            <tr class="table-primary">
                <td scope="row">'.htmlspecialchars($dato['id']).'</td>
                <td>'.htmlspecialchars($dato['nombreE']).'</td>
                <td>'.htmlspecialchars($dato['descripcion']).'</td>
                <td>'.htmlspecialchars($dato['archivo']).'</td>
                <td><a class="btn btn-danger" href="?accion=borrar&id='.htmlspecialchars($dato['id']).'&archivo='.htmlspecialchars($dato['archivo']).'">Eliminar</a></td>
            </tr>';
        }
    } 
    //subir datos de ejercicios
    public function validarE($datosE, $archivoE){
        if(empty($datosE['nombreE'])){
            $this->nombreM = 'porfavor coloque un nombre al Ejercicio';
        }
        if(empty($archivoE['name'])){
            $this->archivoM = 'porfavor suba un Ejercico PHP';
        }
        if(empty($datosE['descripcionE'])){
            $this->descripcionM = 'porfavor scoloque una descripcion al ejercicio PHP';
        }
        if(!empty($datosE['nombreE']) && !empty($archivoE['name']) && !empty($datosE['descripcionE'])){
            $this->validarArchivo($archivoE);
            // print_r($archivoE['name']);
            $this->savaData($datosE, $this->nombreI);
        }
    }
    private function savaData($datosA, $archivoE){
        $datos = [$datosA['nombreE'],$datosA['descripcionE'], $archivoE];
        // print_r( $datos);
        $consultaR = new Consultas();
        $consultaR->insertEjercicio($datos);
        header('location:subirEView.php');
    }
    private function validarArchivo($datosE) {
        if ($datosE['error'] === UPLOAD_ERR_OK) {
            $fileExtension = pathinfo($datosE['name'], PATHINFO_EXTENSION);
            $allowedExtension = 'php';
            
            if (strtolower($fileExtension) === strtolower($allowedExtension)) {
                $fileType = mime_content_type($datosE['tmp_name']);
                $date = date("His");
                $this->nombreI = $date . '-' . $datosE['name'];
    
                $this->almacenarA = 'files/ejerciciosPHP/' . basename($this->nombreI);
    
                if (move_uploaded_file($datosE['tmp_name'], $this->almacenarA)) {
                    // Cambiar permisos para permitir escritura y ejecución
                    chmod($this->almacenarA, 0755);  // Permisos: lectura, escritura y ejecución para el propietario, y lectura y ejecución para otros
                    echo 'Se almacenó correctamente el Ejercicio ' . htmlspecialchars($datosE['name']);
                } else {
                    echo 'Pasó algo malo';
                }
            } else {
                echo 'Extensión no permitida';
            }
        } else {
            echo 'El archivo contiene un error. Vuelve a intentarlo más tarde.';
        }
    }
}
?>
