<?php
    namespace app\controllers;
    use app\models\mainModel,PDO;

    class userController extends mainModel{
        // METODO PARA MOSTAR LA LISTA DE USURIOAS
        public function getUserRegister(){
            $registro = $this->selection('all', 'users');
            if ($registro) {
                // Ejecutar la consulta y obtener los resultados como un array asociativo
                $resultados = $registro->fetchAll(PDO::FETCH_ASSOC);
                $main = '';
                foreach($resultados as $resultado){
                    $main .= '<tr>';
                    $main .= '<td>'.$resultado['id'].'</td>';
                    $main .= '<td>'.$resultado['usuario'].'</td>';
                    $main .= '<td>'.$resultado['clave'].'</td>';
                    $main .= '<td>'.$resultado['cargo'].'</td>';
                    $main .= '<td>';
                    $main .= '<a href="'.APP_URL.'edit-user/'.$resultado['id'].'" class="btn btn-secondary">';
                    $main .= '<i class="fas fa-marker"></i>';
                    $main .= '</a>';
                    $main .= '<a href="'.APP_URL.'delete-user/'.$resultado['id'].'" class="btn btn-danger">';
                    $main .= '<i class="far fa-trash-alt"></i>';
                    $main .= '</a>';
                    $main .= '</td>';
                    $main .= '</tr>';
                }
                return $main; // Ahora mostrará los datos de la tabla
            } else {
                $main = '<tr><td colspan="5">No se encontraron regsitros</td></tr>';
                return $main; // Ahora mostrará los datos de la tabla
            }

        }
    }