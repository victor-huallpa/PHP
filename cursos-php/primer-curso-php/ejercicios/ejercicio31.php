<?php
//JSON sirve para leer informacion de apis 
$jsonContenido = '[
    {"nombre":"vech", "apellido":"Huallpa"},
    {"nombre":"jersson", "apellido":"quispe"}
]';

$resultado = json_decode($jsonContenido);

print_r($resultado);

foreach($resultado as $persona){
    // print_r($persona->nombre);
    echo "<br/>".$persona->nombre." ".$persona->apellido;
}

?>