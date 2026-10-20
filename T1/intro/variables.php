<?php
print "<h3> Variable Referencia </h3>";
$white = 1;
$black = 2;

print "Valores diferentes entre $" . "white y $" . "black <br>";
print "$" . "white: " . $white . "<br>";
print "$" . "black: " . $black . "<br><br>";

print "Se le cambia la memoria de $" . "black por la memoria de $" . "white<br>";
$black =& $white;
print $black . "<br><br>";

print "Con unset($" . "white) borra el nombre de $" . "white pero se mantiene la memoria junto con la de $" . "black";
unset($white);
print "<br>" . $black . "<br><br>";

print "<h3> Variable Scope </h3>";
print "Existen 4 tipos: <br><br> <strong>Local:</strong> <br>";

function showLocalCounter() {
    $localCounter = 1;
    echo "El contador local dentro de la función es {$localCounter}<br><br>";
}
showLocalCounter();
// echo $localCounter; // Error: $localCounter no existe fuera de la función

print "<strong>Variable blobal:</strong> <br>";
$counter = 10;
function updateCounterGlobal() {
    global $counter;
    $counter++;
}
updateCounterGlobal();
echo $counter . "<br><br>";

print "<strong>Static variable:</strong> <br>";
function updateCounterStatic() {
    static $counter = 0;
    $counter++;
    echo "El contador estático es ahora {$counter}<br>";
}
updateCounterStatic();
echo "Contador global es {$counter}<br><br>";

print "<strong>Variable como parámetro:</strong> <br>";
function greet($name) {
    echo "Hola {$name}<br>";
}
greet("Deif");
echo "<br><br>";

print "<h3>String chaining:</h3>";
$a = "1";
$b = 2;
var_dump($a + $b); // 3
var_dump($a . $b); // 12
?>