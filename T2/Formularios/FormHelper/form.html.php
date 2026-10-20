<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de pizza</title>
</head>
<body>
    <form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
        <table>
            <?php if ($errors) { ?>
            <tr>
                <td>Por favor corrige estos errores:</td>
                <td>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= $form->encode($error) ?></li> <!-- encode, no endcode -->
                        <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
            <?php } ?>

            <tr>
                <td>Tu nombre:</td>
                <td><?= $form->input('text', ['name' => 'name']) ?></td> <!-- sin $ delante del método -->
            </tr>
            <tr>
                <td>Tu edad:</td>
                <td><?= $form->input('text', ['name' => 'age']) ?></td>
            </tr>
            <tr>
                <td>Selecciona tu pizza:</td>
                <td><?= $form->select($GLOBALS['pizzas'], ['name' => 'pizza']) ?></td>
            </tr>
            <tr>
                <td>Selecciona ingredientes:</td>
                <td><?= $form->select($GLOBALS['ingredients'], ['name' => 'ingredients', 'multiple' => true]) ?></td> <!-- clave => valor -->
            </tr>
            <tr>
                <td>Delivery:</td>
                <td><?= $form->input('checkbox', ['name' => 'delivery']) ?></td> <!-- mismo nombre que en validateForm -->
            </tr>
            <tr>
                <td>Selecciona el tamaño:</td>
                <?php foreach ($GLOBALS['sizes'] as $size => $label) : ?>
                    <td>
                        <?= $form->input('radio', ['name' => 'size', 'value' => $size]) ?>
                        <label><?= $form->encode($label) ?></label>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td colspan="2" align="center"><?= $form->input('submit', ['value' => 'Order']) ?></td>
            </tr>
        </table> <!-- faltaba cerrar -->
    </form> <!-- faltaba cerrar -->
</body>
</html>