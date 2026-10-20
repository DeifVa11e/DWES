<?php
$var = "ABCDEFG: /MNRPQR/";
echo "Original $var <hr />";

// Remplazar cadena por 'bob'
echo substr_replace($var, "bob", 0, strlen($var)) . "<hr />";

// Añadir 'bob' a la derecha desde principio de $var
echo substr_replace($var, "bob", 0, 0) . "<hr />";

// Remplazar 'MNRPQR' por 'bob'
echo substr_replace($var, "bobbob", -7, -1) . "<hr />";

// Remplazar desde la posición 7 contando desde atrás
echo substr_replace($var, "bob", -7, 0) . "<hr />";

// Mantener 2 caracteres empezando desde el final
echo substr_replace($var, "bob", 0, -3) . "<hr />";

// Eliminar 'MNRPQR'
echo substr_replace($var, "", -7, -1);

?>