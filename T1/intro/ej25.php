<?php
$ceu = array( "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
    "Austria" => "Vienna", "Poland" => "Warsaw") ;

echo "<table border='1'>";
echo "<tr><th>Country</th><th>Capital</th></tr>";

foreach ($ceu as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}

echo "</table>"
?>