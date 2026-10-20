<?php
$texto = "Hola mundo, hola PHP";

echo "busca la primera aparición de una cadena, Ej: <br> strpos: " . strpos($texto, "hola") . "<br><br>";

echo "busca la última aparición de una cadena, Ej: <br> strrpos: " . strrpos($texto, "hola") . "<br><br>";

echo "devuelve la cadena desde la primera aparición, Ej: <br> strstr: " . strstr($texto, "mundo") . "<br><br>";

echo "funciona igual que strstr(), Ej: <br> strchr: " . strchr($texto, "PHP") . "<br><br>";

echo "cuenta los caracteres iniciales que pertenecen al conjunto de caracteres indicado, Ej: <br> strspn: " . strspn("123abc", "0123456789") . "<br><br>";
strc

echo "cuenta los caracteres iniciales que NO pertenecen al conjunto de caracteres indicado, Ej: <br> strcspn: " . strcspn("abc123", "0123456789") . "<br><br>";
?>