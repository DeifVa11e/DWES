<?php
$text = array("elefante", "sol", "camino", "mariposas", "luz", "desarrollo", "paz", "extraordinario",
    "música", "universo", "sal", "creatividad", "río", "horizonte", "tren");
function get_shortest_longest($text) {
    $shortest = $text[0];
    $longest = $text[0];

    foreach ($text as $clave) {
        if (strlen($clave) < strlen($shortest)) {
            $shortest = $clave;
        }
        if (strlen($clave) > strlen($longest)) {
            $longest = $clave;
        }
    }

    echo "La palabra más corta es: $shortest <br>";
    echo "La palabra más larga es: $longest";
}

get_shortest_longest($text);
?>