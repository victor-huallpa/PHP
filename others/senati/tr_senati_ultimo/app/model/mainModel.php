<?php
    namespace app\model;
    use app\model\dbModel;
    use PDO,Exception,PDOException,PDOStatement;
    class mainModel{
        //atributos
        private $conection;

        //constructor // obtiene conexion a base de datos
        public function __construct(){
            $this->conection = dbModel::getInstance();
        }
        //METODO PARA EJECUTAR CONSULTAS
        private function execution(string $query, array $params = [], bool $returnLastId = false): PDOStatement|bool|string{
            try{
            $execQuery = $this->conection->getconect()->prepare($query);
                if(isset($params) && count($params) > 0){
                    foreach($params as $param){
                        $execQuery->bindValue($param[0], $param[1], $param[2] ?? PDO::PARAM_STR);
                    }
                }
                if ($returnLastId && strtolower(substr(trim($query), 0, 6)) === 'insert') {
                    return $this->conection->getconect()->lastInsertId();
                }
                $execQuery->execute();
                return $execQuery;  
            }catch(PDOException $e){
                //regsitra el error en el log
                error_log("Error al conectar a la base de datos: ". $e->getMessage());
                //lanzar la ecepcion con un mensaje personalizado
                // throw new Exception("Error al conectar a la base de datos");
                //lanzar la ecepcion
                // throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
                echo "Error al conectar a la base de datos: " . $e->getMessage();
                return false;
            }
        }
        //METODO PARA LIMPIAR CADENAS
        public function clearString(string $string): string {
            $string = trim($string);
            $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8'); 
            $string = preg_replace('/\b(SELECT|DELETE|INSERT|DROP|TRUNCATE|SHOW|--|;)\b/i', '', $string);
            return $string;
        }
        //METODO PARA VERIFICAR EXPRESIONES REGULARES
        public function validateExpresion(string $expression,string $string):bool{
            //validamos con preg_match en una condicional
            return !preg_match("/^" . preg_quote($expression, '/') . "$/", $string);
        }
        //METODO PARA SELECCIONAR DATOS/REGISTROS
        public function selection(string $type, string $table, string $field = '', int|string $id = ''):PDOStatement|false{
            //reseteamos datos
            $type = $this->clearString($type);
            $table = $this->clearString($table);
            $field = $this->clearString($field);
            //tipo de adquisision de dato all or one
            if($type === "all"){
                $query = "SELECT * FROM $table";
                return $this->execution($query);

            }elseif($type === "one"){
                $query = "SELECT * FROM $table WHERE $field = :ID";
                $params = [
                    [":ID", $id, is_string($id) ? PDO::PARAM_STR : PDO::PARAM_INT]
                ];
                return $this->execution($query, $params ?? []);

            }
            return false;
        }
        //METODO PARA INSERTAR DATOS/REGISTROS
        public function insertion(string $table, $fields): PDOStatement|bool|string{
            //limpiamos datos
            $table = $this->clearString($table);
            //preparamos la consulta
            $query = "INSERT INTO $table (";
            $contador = 0;
            foreach($fields as $field){
                if($contador > 0){$query .= ", ";}
                $field = $this->clearString($field['campo_nombre']);
                $query .= $field;
                $contador++;
            }
            $query .= ") VALUES (";
            $contador = 0;
            foreach($fields as $value){
                if($contador > 0){$query .= ", ";}
                $query .= ":".$value['campo_marcador'];
                $contador++;
            }
            $query .= ")";
            //preparamos e iteramos los parametros en un array
            foreach ($fields as $field) {
                $params[] = [
                    ":" . $field['campo_marcador'],
                    $field['campo_valor'],
                    is_string($field['campo_valor']) ? PDO::PARAM_STR : PDO::PARAM_INT
                ];
            }
            //pasamos la consulta y los parametros al metodo execution
            return $this->execution($query, $params);
        }
        //METODO PARA ACTUALIZAR DATOS/REGISTROS
        public function update(string $table, $fields, $conditions): PDOStatement|bool{
            //limpiamos datos
            $table = $this->clearString($table);
            //preparamos la consulta
            $query = "UPDATE $table SET ";
            //iteramos los campos y valores
            $contador = 0;
            foreach($fields as $field){
                if($contador > 0 ){$query .= ", ";}
                $query .= $field['campo_nombre']." = :".$field['campo_marcador'];
                $contador++;
            }
            $query .= " WHERE {$conditions['campo_nombre']} = :VAL";
            //preparamos los parametros en un array
            $params = [
                [":VAL", $conditions['campo_valor'], PDO::PARAM_STR]
            ];
            foreach ($fields as $field) {
                // echo $field['campo_valor'].'<br>';
                $params[] = [
                    ":" . $field['campo_marcador'],
                    $field['campo_valor'],
                    is_string($field['campo_valor']) ? PDO::PARAM_STR : PDO::PARAM_INT
                ];
            }
            //pasamos la consulta y los parametros al metodo execution
            return $this->execution($query, $params);

        }
        //METODO PARA ELINIMAR DATOS/REGISTROS
        public function deletion(string $table, string $field, string|int $value): PDOStatement|bool{
            //limpiamos los datos
            $table = $this->clearString($table);
            $field = $this->clearString($field);
            //preparamos la consulta
            $query = "DELETE FROM $table WHERE $field = :VAL";
            //preparamos los parametros en un array
            $params =[
                [":VAL", $value, PDO::PARAM_STR],
            ];
            //pasamos la consulta y los parametros al metodo execution
            return $this->execution($query, $params);
        }
    }