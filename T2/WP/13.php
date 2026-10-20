<?php
$cities = array(
    "Madrid" => 3151689,
    "Barcelona" => 1602386,
    "Valencia" => 787266,
    "Sevilla" => 696676,
    "Zaragoza" => 666058,
    "Málaga" => 566913,
    "Murcia" => 439712,
    "Palma de Mallorca" => 399093,
    "Las Palmas de Gran Canaria" => 382283,
    "Bilbao" => 346574
);

print "<h3> Ordenar mediante Popularidad</h3>";
function citiesPopulation($cities) {
    echo "<table border='1'>";
    echo "<tr><th>Ciudad</th><th>Población</th></tr>";
    foreach ($cities as $key => $valor) {
        echo "<tr><th>$key</th><th>$valor</th></tr>";
    }
    echo"</table>";
}

citiesPopulation($cities);

print "<h3> Ordenar mediante Población</h3>";
function citiesPoblation($cities) {
    arsort($cities);
    echo "<table border='1'>";
    echo "<tr><th>Ciudad</th><th>Población</th></tr>";
    foreach ($cities as $key => $valor) {
        echo "<tr><th>$key</th><th>$valor</th></tr>";
    }
    echo"</table>";
}

citiesPoblation($cities);

print "<h3> Ordenar mediante Nombre de Ciudad</h3>";
function citiesName($cities) {
    ksort($cities);
    echo "<table border='1'>";
    echo "<tr><th>Ciudad</th><th>Población</th></tr>";
    foreach ($cities as $key => $valor) {
        echo "<tr><th>$key</th><th>$valor</th></tr>";
    }
    echo"</table>";
}

citiesName($cities);
?>