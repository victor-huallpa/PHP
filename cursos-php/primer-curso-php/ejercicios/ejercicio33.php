<?php
//consumo de api de pokemon
$url = "https://pokeapi.co/api/v2/pokemon/ditto";
$url2 = "https://pokeapi.co/api/v2/pokemon-species/aegislash";
$url3 = "https://api.covidtracking.com/v1/states/info.json";

$option = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));//para poder acceder "lectura" al navegador devido a la seguridad htts

$respuesta = file_get_contents($url,false,stream_context_create($option));
$respuesta2 = file_get_contents($url2,false,stream_context_create($option));
$respuesta3 = file_get_contents($url3,false,stream_context_create($option));

$objrespuesta = json_decode($respuesta);
$objrespuesta2 = json_decode($respuesta2);
$objrespuesta3 = json_decode($respuesta3);

// // print_r($objrespuesta);
// foreach($objrespuesta->held_items as $datos){//datos dito pokemon
//     // print_r($datos->version_details);
//     foreach($datos->version_details as $vDetail){//se aplica cuando existen varios ovjetos y ambos contienen los mismos datos.
//         print_r($vDetail->version->name);
//         print_r($vDetail->rarity);
//     }
// }
// foreach($objrespuesta2->flavor_text_entries as $datos2){//datos pokemon
//     print_r($datos2->flavor_text);
//     print_r($datos2->language->name);
// }
// foreach($objrespuesta3 as $datos3){//datos covid
//     print_r($datos3->name);
//     print_r($datos3->fips);
// }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json</title>
</head>
<body>
    <ul>
<?php 
    foreach($objrespuesta->held_items as $datos){//datos dito pokemon
        // print_r($datos->version_details);
        foreach($datos->version_details as $vDetail){//se aplica cuando existen varios ovjetos y ambos contienen los mismos datos.?>
        <li><?php echo ($vDetail->version->name);?> | <?php echo ($vDetail->rarity);?></li>
<?php }
}
    foreach($objrespuesta2->flavor_text_entries as $datos2){//datos pokemon?>
        <li><?php echo ($datos2->flavor_text); ?> | <?php echo ($datos2->language->name); ?></li>
    <?php } 
    foreach($objrespuesta3 as $datos3){//datos covid?>
        <li><?php echo ($datos3->name);?> | <?php echo ($datos3->fips);?></li>
<?php }
?>

    </ul>
</body>
</html>