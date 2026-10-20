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
        <label for="zipcode">Introduce un zipcode de 5 caracteres</label>
        <input type="text" id="zipcode" name="zipcode">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['zipcode'])) {
        $zipLimpio = trim($_POST['zipcode']);
        $zipLength = strlen($zipLimpio);
        if ($zipLength != 5) {
            print_r("Por favor introduce un código de 5 caracteres");
        }
    }
    ?>
</body>
</html>