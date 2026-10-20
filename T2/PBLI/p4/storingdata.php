<?php
$family = array("fred", "Wilma");
$family[] = "Pebbles";
print_r($family);
echo "<br>";

$person = array("name" => "Fred");
$person[] = "Wilma";
print_r($person);
echo "<br>";

$numbers = range(2, 5);
$letters = range('a', 'z');
$reverse_num = range(5, 2);
print_r($numbers);
echo "<br>";
print_r($letters);
echo "<br>";
print_r($reverse_num);
echo "<hr />";

$scores = array(5, 10);
$padded = array_pad($scores, 8, 0);
$padded2 = array_pad($scores, -8, 0);
print_r($padded);
echo "<br>";
print_r($padded2);
echo "<hr />";

$person2 = array("Diego", 19, "Zule");
list($name, $age, $gf) = $person2;
echo $name . " " . $age . " " . $gf;
echo "<hr />";

$people = array("Tom", "Dick", "Harriet", "Brenda", "Jojo");
// array_slice no modifica el array original, solo extrae
list($segundo, $tercero) = array_slice($people, 1, 2);
print_r($segundo);
echo " ";
print_r($tercero);
echo "<hr />";

$key = array_keys($person);
print_r($key);
if (array_key_exists('name', $person)){
    echo "<br>Sí existe la clave";
}
echo "<hr />";

$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
// array_splice modifica array original extrayendo componentes
$removed = array_splice($subjects, 2, 3);
print_r($removed);
echo "<br>";
print_r($subjects);
echo "<br>";
$removed = array_splice($subjects, 2);
print_r($removed);
echo "<br>";
print_r($subjects);
echo "<br>";
// array_splice no solo sirve para extraer, también para insertar
$new = array("law", "business", "IS");
array_splice($subjects, 2, 0, $new);
print_r($subjects);
echo "<hr />";

// extract(): Convierte las claves de un array asociativo en variables individuales.
extract($person2);
echo "Name: {$name}, Age: {$age}, Girlfrend: {$gf}";

// compact(): Hace lo contrario, toma variables existentes y crea un array asociativo con ellas.
$color = "indigo";
$shape = "curvy";
$floppy = "none";
$a = compact("color", "shape", "floppy");
echo "<br>";
print_r($a);
echo "<hr />";

?>