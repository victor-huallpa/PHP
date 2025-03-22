<?php
require_once "conecction.php";

class Consultas {
    private $usuario;
    private $contrasenia;
    private $usuarioR;
    private $contraseniaR;
    private $objconeccion;
    private $ejecucion;
    private $consulta;
    //resultados
    private $datos;
    private $filas;

    function __construct() {
        $this->objconeccion = Conexion::startConection()->showConection();
    }
    public function consultaUser($dataU) {
        $this->usuario = $dataU[0];
        $this->contrasenia = $dataU[1];
        try {
            $this->consulta = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia;";
            $this->ejecucion = $this->objconeccion->prepare($this->consulta);
            $this->ejecucion->bindParam(':usuario', $this->usuario);
            $this->ejecucion->bindParam(':contrasenia', $this->contrasenia);
            $this->ejecucion->execute();

            $this->filas = $this->ejecucion->rowCount();
            if ($this->filas == 1) {
                $this->enviarDatosU();
                return [$this->usuarioR, $this->contraseniaR];
            } 
        } catch (PDOException $e) {
            echo 'Hubo un problema en la conexión: ' . $e->getMessage();
        }
    }
    private function enviarDatosU() {
        $datos = $this->ejecucion->fetch(PDO::FETCH_ASSOC);
        if ($datos) {
            $this->usuarioR = $datos['usuario'];
            $this->contraseniaR = $datos['contrasenia'];
        }
    }
    public function consultaProyecto(){//esta funcion esta obsoleta
        $this->consultaPMostrar();
        return $this->datos;
        // $this->consultaPEliminar();
        // $this->consultaPActualizar();
    }
    public function consultaPMostrar(){
        $query = "SELECT * FROM proyectos";
        $this->ejecucion = $this->objconeccion->prepare($query);
        $this->ejecucion->execute();
        $this->filas = $this->ejecucion->rowCount();
        if($this->filas > 0){
            $this->datos = $this->ejecucion->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        }
    }
    public function consultaPEliminar($datosP){
        echo 'estas aca';
        try {
            $query = "DELETE FROM proyectos WHERE id=:id AND imagen=:imagen"; // Corrección aquí
            $this->ejecucion = $this->objconeccion->prepare($query); // Corrección aquí
            $this->ejecucion->bindParam(':id', $datosP[0]);
            $this->ejecucion->bindParam(':imagen', $datosP[1]); // Corrección aquí
            $this->ejecucion->execute(); // Ejecución de la consulta
        } catch (PDOException $e) {
            echo 'Consulta invalida:<br>' . $e->getMessage();
        }
    }
    public function consultaInsertar($datosP) {
        try {
            $query = "INSERT INTO proyectos (nombre, imagen, descripcion) VALUES (:nombre, :imagen, :descripcion)";
            $this->ejecucion = $this->objconeccion->prepare($query);
            $this->ejecucion->bindParam(':nombre', $datosP[0]);
            $this->ejecucion->bindParam(':imagen', $datosP[2]);
            $this->ejecucion->bindParam(':descripcion', $datosP[1]);
            $this->ejecucion->execute();
        } catch (PDOException $e) {
            echo 'Hubo un problema en la inserción: '.$e->getMessage();
        }
    }
    public function consultaPActualizar($datosP){
        try {
            $query = "UPDATE proyectos SET nombre=:nombre, imagen=:imagen, descripcion=:descripcion WHERE id=:id";
            $this->ejecucion = $this->objconeccion->prepare($query);
        
            // Asignar valores a los parámetros
            $this->ejecucion->bindParam(':id', $datosP[3]);
            $this->ejecucion->bindParam(':nombre', $datosP[0]);
            $this->ejecucion->bindParam(':imagen', $datosP[2]);
            $this->ejecucion->bindParam(':descripcion', $datosP[]);
        
            // Ejecutar la consulta
            $this->ejecucion->execute();
        
            echo 'Actualización exitosa';
        } catch (PDOException $e) {
            echo 'Algo salió mal en la actualización: ' . $e->getMessage();
        }
    }
    public function consultaSlect($datosP){
        $query = "SELECT * FROM proyectos WHERE id= :id";
        $this->ejecucion = $this->objconeccion->prepare($query);
        $this->ejecucion->bindParam(':id', $datosP);
        $this->ejecucion->execute();
        $this->filas = $this->ejecucion->rowCount();
        if($this->filas > 0){
            $this->datos = $this->ejecucion->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        }
    }
    //eliminar ejercicio
    public function consultarEjercicio($datos){
        try{
            $sql = "SELECT * FROM ";

        }catch(PDOException $e){
            echo 'error de consulta: <br>'.$e;
        }
        echo 'hola bebe'.$datos[1];
    }
    //eliminar ejercicio
    public function deleteEjercicio($datos){
        try{
            $sql = "DELETE FROM ejerciciosphp WHERE id= :id AND archivo= :archivo";
            $this->ejecucion = $this->objconeccion->prepare($sql);
            $this->ejecucion->bindParam(':id', $datos[0]);
            $this->ejecucion->bindParam(':archivo', $datos[1]);
            $this->ejecucion->execute();
        }catch(PDOException $e){
            echo 'hubo un error: <br>'.$e;
        }

    }
    //almacenar ejercicio
    public function insertEjercicio($datos){
        try{
            $sql = "INSERT INTO ejerciciosphp (nombreE, descripcion, archivo) VALUES (:nombre, :descripcion, :archivo)";
            $this->ejecucion = $this->objconeccion->prepare($sql);
            $this->ejecucion->bindParam(':nombre',$datos[0]);
            $this->ejecucion->bindParam(':descripcion',$datos[1]);
            $this->ejecucion->bindParam(':archivo',$datos[2]);
            $this->ejecucion->execute();
        }catch(PDOException $e){
            echo 'algo salio mal: <br>'.$e;
        }
    }
    //mostrar ejercicios
    public function seleccionarEjercicio(){
        try{
            $sql = "SELECT * FROM ejerciciosphp";
            $this->ejecucion = $this->objconeccion->prepare($sql);
            $this->ejecucion->execute();
            $this->filas = $this->ejecucion->rowCount();
            if($this->filas > 0){
                $this->datos = $this->ejecucion->fetchAll(PDO::FETCH_ASSOC);
                return $this->datos;
            }
        }catch(PDOException $e){
            echo 'ups! error: <br>'.$e;
        }
    }

    //ejecucion de consultas
    private function ejecucionConsulta(){}
}
?>
Vech@1211Daya