<?php
$cadena_productos = "Pan:1.2,Leche:0.9,Queso:2.5,Huevos:3.0,Mantequilla:1.8";
$productos = [];

$token = strtok($cadena_productos, ",");
while ($token !== false) {
    list($nombre, $precio) = explode(":", trim($token));
    $productos[$nombre] = floatval($precio);
    $token = strtok();
}
?>