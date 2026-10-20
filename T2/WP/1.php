<?php
$fahrenheit = -50;

echo "Fahrenheit Celsius <br>";

while ($fahrenheit <= 50) {
    $celsius = ($fahrenheit - 32) * 5 / 9;

    print "$fahrenheit" . " " . $celsius . "<br>";
    $fahrenheit += 5;
}
?>