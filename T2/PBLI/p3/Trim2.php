<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <label for="comments">Introduce un comentario</label>
    <input type="text" id="comments" name="comments">
    <input type="submit" value="Enviar">

</form>
<?php
// Recoger comments
if (isset($_POST['comments'])) {
    $commentsLimpio = trim($_POST['comments']);
    // Extraer e imprimir por pantalla los 5 primeros caracteres introducidos. substr
    $cincoCaracteres = substr($commentsLimpio, 0, 5);
    print_r($cincoCaracteres);
}
// Crear cadena con heredoc y contar cuantas veces aparece la palabra spam
$texto = <<<TEXTO
Este es un correo que contiene la palabra spam varias veces.
A veces el spam llega a la bandeja de entrada principal.
Si el filtro anti-spam falla, verás más texto con la palabra spam.
TEXTO;

$palabra = "spam";

$total = substr_count($texto, $palabra);

echo "<br><br>".$texto."<br>";
echo "La palabra '$palabra' aparece $total veces.";
?>
</body>
</html>