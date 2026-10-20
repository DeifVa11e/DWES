<?php
function validateForm() {
    $errors = [];
    $username = $_POST['username'] ?? '';

    if (!preg_match('/^[a-zA-Z0-9]+$/D', $username)) {
        $errors[] = 'El nombre de usuario solo puede contener letras y números.';
    }

    return $errors;
}

$errors = [];
$sent = ($_SERVER['REQUEST_METHOD'] === 'POST');

if ($sent) {
    $errors = validateForm();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar username</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username"
               value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
        <button type="submit">Enviar</button>
    </form>

    <?php if ($sent && $errors): ?>
        <ul style="color:red">
            <?php foreach ($errors as $e): ?>
                <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif ($sent): ?>
        <p style="color:green">Usuario válido.</p>
    <?php endif; ?>
</body>
</html>