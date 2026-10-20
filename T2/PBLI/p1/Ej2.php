<?php
$which = "first";

function first() {
    echo "This is the first function";
}

function second() {
    echo "This is the second function";
}

function third() {
    echo "This is the third function";
}

switch ($which) {
    case "first":
        first();
        break;
    case "second":
        second();
        break;
    case "third":
        third();
        break;
    default:
        echo "Escribiste mal";
        break;
}

if (function_exists($which)){
    $which();
}
?>