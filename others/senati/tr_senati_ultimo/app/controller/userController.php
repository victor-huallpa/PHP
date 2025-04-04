<?php
    namespace app\controller;
    use app\model\mainModel,PDO;

    class userController extends mainModel{
        //METODO LOGIN USURIO
        public function loginUser(){
            
            $usuario = $_POST['mail'];
            $clave = $_POST['clave'];
            if(empty($usuario) || empty($clave)){
                return 'Todos los campos son obligatorios';
                exit;
            }
            if($this->validateExpresion("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$", $usuario) === false){
                return 'El correo no es valido';
                exit;
            }

            $validacion = $this->selection('one', 'usuarios', 'usuario', $usuario );

            if($validacion->rowCount() === 1){
                $validacion = $validacion->fetch();
                if(password_verify($clave, $validacion['clave'])){
                    
                    $_SESSION['usuario'] = $validacion['usuario'];
                    $_SESSION['id'] = $validacion['id_personal'];
                    header('Location:'.APP_URL.'asistencia');

                }else{
                    return 'Contraseña incorrecta';
                }
            }else{
                return 'el usuario no existe, vuelva a intentarlo';
            }
        }
        //METODO LOGOUT USUARIO 'cerrar session'
        public function logoutUser(){
            session_unset();
            session_destroy();
            header('Location:'.APP_URL.'login');
        }
        //METODO REGSISTRAR USUARIO
        public function registerUser(){
            $tabla = 'personal';
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $dni = $_POST['dni'];
            $correo = $_POST['correo'];
            $celular = $_POST['cel'];
            if ($_POST['tiempo'] === 'tiempo completo') {
                $tiempo = 'completo';
            } elseif ($_POST['tiempo'] === 'tiempo parcial') {
                $tiempo = 'parcial';
            } else {
                // Manejar el caso de un valor inesperado
                $tiempo = $_POST['tiempo']; // o el valor predeterminado que quieras usar
            }


            $clave1 = $_POST['clave'];
            $clave2 = $_POST['clave2'];

            if(empty($nombre) || empty($apellido) || empty($correo) || empty($tiempo) || empty($clave1) || empty($clave2)){
                return 'Todos los campos son obligatorios';
            }

            if( $clave1 !== $clave2){
                return 'las contrasenias no coinsiden';
            }

            $clave1 = password_hash($clave1, PASSWORD_DEFAULT);

            $datos = [
                ['campo_nombre' => 'nombre', 'campo_marcador' => 'NOMBRE', 'campo_valor' => $nombre],
                ['campo_nombre' => 'apellido', 'campo_marcador' => 'APELLIDO', 'campo_valor' => $apellido],
                ['campo_nombre' => 'dni', 'campo_marcador' => 'DNI', 'campo_valor' => $dni],
                ['campo_nombre' => 'correo', 'campo_marcador' => 'CORREO', 'campo_valor' => $correo],
                ['campo_nombre' => 'n_cel', 'campo_marcador' => 'CEL', 'campo_valor' => $celular],
                ['campo_nombre' => 'tipo_horario', 'campo_marcador' => 'HORARIO', 'campo_valor' => $tiempo],
            ];

            $insertar = $this->insertion($tabla, $datos);
            if($insertar !== false){
                $tabla = 'usuarios';
                $datos = [
                    ['campo_nombre' => 'id_personal', 'campo_marcador' => 'IDP', 'campo_valor' => $insertar],
                    ['campo_nombre' => 'usuario', 'campo_marcador' => 'USUARIO', 'campo_valor' => $correo],
                    ['campo_nombre' => 'clave', 'campo_marcador' => 'CLAVE', 'campo_valor' => $clave1],
                ];
                $validacion = $this->insertion($tabla, $datos);
                if($validacion !== false){
                    header('Location:'.APP_URL);
                }
            }
        }
        //METODO PARA MARCAR ASISTENCIA DE USUARIO
        public function attendaceUser(){
            date_default_timezone_set(APP_TIMEZONE);

            $table = 'asistencias';
            $id = $_POST['id'];
            $fecha = date('Y-m-d');
            $hora = date('H:i:s');
            $accion = $_POST['accion'];

            if(empty($id) || empty($accion) || empty($hora)){
                return 'lo siento no se pudo marcar la asistencia, vuelva a intentarlo';
                exit;
            }
            $data = [
                'campo_nombre' => 'fecha_marcacion', 'campo_marcador' => 'FECHA', 'campo_valor' => $fecha
            ];
            $selecction = $this->selection('one', $table, 'id_personal', $id, true, $data);
            if ($selecction->rowCount() >= 1) {
                $registros = $selecction->fetchAll(); // Obtener todos los registros
                $entrada_registrada = false;
                $salida_registrada = false;
                foreach ($registros as $registro) {
                    var_dump($registro);
                    echo '<br>';
                    if ($registro['accion'] == 'entrada') {
                        $entrada_registrada = true;
                    } elseif ($registro['accion'] == 'salida') {
                        $salida_registrada = true;
                    }
                }
                if ($accion == 'entrada' && $entrada_registrada) {
                    return 'ya se marco la asistencia entrada';
                } elseif ($accion == 'salida' && $salida_registrada) {
                    return 'ya se marco la asistencia salida';
                }
            }
            $fields = [
                ['campo_nombre' => 'id_personal', 'campo_marcador' => 'IDP', 'campo_valor' => $id],
                ['campo_nombre' => 'fecha_marcacion', 'campo_marcador' => 'FECHA', 'campo_valor' => $fecha],
                ['campo_nombre' => 'hora_marcacion', 'campo_marcador' => 'HORA', 'campo_valor' => $hora],
                ['campo_nombre' => 'accion', 'campo_marcador' => 'ACCION', 'campo_valor' => $accion],
            ];
            $insertar = $this->insertion($table, $fields);
            if($insertar !== false){
                header('Location:'.APP_URL.'asistencia');
            }else{
                echo 'no se pudo marcar la asistencia';
            }
        }
    }