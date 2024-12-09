<?php
/*
crea un algoritmo que itere el sigueitne array multidimencional
*/

#array
$productos = [
    ["codigo" => "000A1", "descripcion" => "Mouse"],
    ["codigo" => "000A2", "descripcion" => "Teclado"],
    ["codigo" => "000A3", "descripcion" => "Monitor"],
    ["codigo" => "000A4", "descripcion" => "Case"],
    ["codigo" => "000A5", "descripcion" => "Camara web"],
];

#ciclo foreach sin clave
foreach($productos as $produc){
    echo "Codigo {$produc['codigo']}-preducto {$produc['descripcion']} <br>";//mediante interpolacion
    // echo "Codigo ".$produc['codigo']." - preducto ".$produc['descripcion']."<br>";//mediante concatenacion
}

#ciclo foreach con clave
foreach($productos as $clave => $produc){
    echo "$clave codigo {$produc['codigo']}- preducto {$produc['descripcion']} <br>";//mediante interpolacion
    // echo "Codigo ".$produc['codigo']." - preducto ".$produc['descripcion']."<br>";//mediante concatenacion
}

#ciclo foreach con clave iterando el primer array del arraykk
foreach($productos[1] as $clave => $produc){
    echo "$clave: {$produc}<br>";
}

