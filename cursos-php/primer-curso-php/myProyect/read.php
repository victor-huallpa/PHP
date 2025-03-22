<?php 
include_once "cabecera.php";
if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])) {
    header('Location: index.php');  // Redirigir a la página de inicio
    exit();  // Detener la ejecución del script
}
class Proyecto{
    private $consultas;
    private $consultas1;
    private $accionU;
    public $nombreA;
    public $descripcionA;
    public $imagenA;
    public $btnA;
    //datos enviar
    private $nombre;
    private $descripcion;
    private $imagen;
    private $imagenT;
    //mesnajes
    public $nombreM;
    public $descripcionM;
    public $imagenM;
    //almacenar
    private $almacenar;
    private $datosP;
    function __construct($accion)
    {
        $this->consultas = new Consultas();
        $this->accionU = $accion;
    }
    public function accion(){
        if($this->accionU === 'subirDatos'){
            $this->saveData();
        }if($this->accionU === 'borrar'){
            $this->eliminarData();
        }if($this->accionU === 'modificar' ){
            $this->modificarData();
        }if($this->accionU === 'actualizar' ){
            $this->saveData();
        }
    }
    //Actualizar
    private function modificarData(){
        if(!empty($_GET['id'])){
            // $this->nombre = $_POST['nombre'];
            // $this->descripcion = $_POST['descripcion'];
            // $this->imagen = $_FILES['imagen'];

            // $this->consultas->consultaPActualizar($_GET['id']);
            $this->consultas1 = $this->consultas->consultaSlect($_GET['id']);
            foreach($this->consultas1 as $dato){
                $this->nombreA = $dato['nombre'];
                $this->descripcionA = $dato['descripcion'];
                $this->imagenA= $dato['imagen'];
                $this->bntA();
            }
            return;
        }
    }
    private function bntA(){
        $this->btnA ='<button type="submit" value="actualizar" name="btn" class="btn btn-secondary">Guardar cambios</button>';
    }
    //eliminar datos
    private function eliminarData(){
        if(!empty($_GET['id'] && $_GET['nameImg'])){
            $this->nombre = $_GET['id'];
            $this->imagen = $_GET['nameImg'];
            unlink("galeria/".$this->imagen);
            $this->datosP = [$this->nombre, $this->imagen];
            $this->consultas->consultaPEliminar($this->datosP);
            header('location:read.php');
        }
    }
    private function validarDatos(){
        if($this->nombre === ''){
            $this->nombreM = "llenar campo 'Nombre del Proyecto'";
            $this->accionU=='actualizar'?$this->bntA():'';
        }
        if($this->descripcion === ''){
            $this->descripcionM = "llenar campo 'Descripcion del Proyecto'";
            $this->accionU=='actualizar'?$this->bntA():'';
        }
        if($this->imagen['name'] === ''){
            $this->imagenM = "falta subir imagen ";
            $this->accionU=='actualizar'?$this->bntA():'';
        }
        if($this->nombre !== '' && $this->descripcion !== '' && $this->imagen['name'] !== ''){
            if($this->saveImg()){
                $this->datosP = [$this->nombre,$this->descripcion,$this->imagenT,$_GET['id']];
                if($this->accionU === 'actualizar' ){
                    $this->consultas->consultaPActualizar($this->datosP);
                    header('location:read.php');
                }if($this->accionU === 'subirDatos'){
                    $this->consultas->consultaInsertar($this->datosP);
                    header('location:read.php');
                }
                return true;
            }
            return false;
        }
    }
    private function saveImg(){
        if (isset($this->imagen) && $this->imagen['error'] === UPLOAD_ERR_OK) {
            $fileExtension = pathinfo($this->imagen['name'], PATHINFO_EXTENSION);
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            
            if (in_array(strtolower($fileExtension), $allowedExtensions)) {
                $fileType = mime_content_type($this->imagen['tmp_name']);
                $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
                if (in_array($fileType, $allowedMimeTypes)) {
                    $this->almacenar = 'galeria/' . basename($this->imagenT);
                    if (move_uploaded_file($this->imagen['tmp_name'], $this->almacenar)) {
                        echo 'Se almacenó correctamente';
                        return true;
                    } else {
                        echo 'No se pudo almacenar este archivo';
                        return false;
                    }
                } else {
                    echo 'No se puede subir el archivo';
                    return false;
                }
            } else {
                echo 'El archivo no está en el formato permitido';
                return false;
            }
        } else {
            echo 'Error en la subida del archivo';
            return false;
        }
    }
    private function saveData(){
        $time = new DateTime();
        $time->getTimesTamp();
        $this->nombre = $_POST['nombre'];
        $this->descripcion = $_POST['descripcion'];
        $this->imagen = $_FILES['imagen'];
        $this->imagenT = $time->getTimesTamp().'_'.$this->imagen['name'];
        $this->validarDatos();
    }
    //mostrar datos
    public function showData(){
        $this->consultas = $this->consultas->consultaPMostrar();
        if(!empty($this->consultas)){
            foreach($this->consultas as $dato){
                echo '<tr>';
                echo '<td>'.htmlspecialchars($dato['id']).'</td>';
                echo '<td>'.htmlspecialchars($dato['nombre']).'</td>';
                echo '<td><img width="100" src="galeria/'.htmlspecialchars($dato['imagen']).'" alt=""></td>';
                echo '<td>'.htmlspecialchars($dato['descripcion']).'</td>';
                echo '<td><a class="btn btn-danger" href="?accion=borrar&id='.htmlspecialchars($dato['id']).'&nameImg='.htmlspecialchars($dato['imagen']).'">Eliminar</a> <a href="?accion=modificar&id='.htmlspecialchars($dato['id']).'" class="btn btn-info">Actualizar</a></td>';
                echo '</tr>';
            }
        }else{
            echo 'no hay datos';
        } 
    }
}
$accion = $_POST['btn'] ?? $_GET['accion'] ?? null;;

$myClase = new Proyecto($accion);

// Crear una instancia de la clase Consultas
// Llamar al método consultaProyecto y obtener los resultados
// $resultados = $consultas->consultaProyecto('','');

if(isset($accion)){
    $myClase->accion();
}

?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1>PORTAFOLIO</h1>
                </div>
                <div class="card-body">
                    <form action="read.php" method="post" enctype="multipart/form-data">
                        Nombre del Proyecto: <?php echo $myClase->nombreM;?>
                        <input class="form-control" type="text" name="nombre" id="" placeholder="nombre" value="<?php echo isset($myClase->nombreA)?$myClase->nombreA:'';?>"><br>
                        <!--<input class="form-control" type="text" name="descripcion" value=""><br> -->
                        Imagen: <?php echo $myClase->imagenM;?> 
                        <input type="file" class="form-control" name="imagen" id=""><br>
                        Descripcion del Proyecto: <?php echo $myClase->descripcionM;?> 
                        <textarea class="form-control" name="descripcion"><?php echo isset($myClase->descripcionA)?$myClase->descripcionA:'';?></textarea>
                        <br>
                        <button type="submit" value="subirDatos" name="btn" class="btn btn-success">Enviar Proyecto</button>
                        <?php echo isset($myClase->btnA)?$myClase->btnA:'';?>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-6"        >
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $myClase->showData();?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once "pie.php"?>