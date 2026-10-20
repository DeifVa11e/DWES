<?php
function fahrenheitACelsius(float $fahrenheit): float {
    return ($fahrenheit - 32) * 5 / 9;
}

$resultado = null;
$error = null;
$valor = $_POST['fahrenheit'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (is_numeric($valor)) {
        $resultado = fahrenheitACelsius((float) $valor);
    } else {
        $error = "Introduce un valor numérico válido";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Fahrenheit a Celsius</title>
</head>
<body>
    <h1>Fahrenheit a Celsius</h1>
 
    <form method="post">
        <label for="fahrenheit">Grados Fahrenheit:</label>
        <input type="text" id="fahrenheit" name="fahrenheit"
               value="<?= htmlspecialchars($valor) ?>">
        <button type="submit">Convertir</button>
    </form>
 
    <?php if ($error): ?>
        <p style="color:red"><?= $error ?></p>
    <?php elseif ($resultado !== null): ?>
        <p><?= htmlspecialchars($valor) ?> °F = <?= round($resultado, 2) ?> °C</p>
    <?php endif; ?>
</body>
</html>