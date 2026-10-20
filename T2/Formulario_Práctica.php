<?php
/**
 * Programa en PHP con formulario web
 * Nivel: Universitario
 *
 * OBJETIVO:
 * Trabajar con arrays y cadenas de texto usando funciones básicas de PHP.
 *
 * Funciones usadas:
 * explode, count, array_reverse, array_filter, str_replace
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesamiento de Arrays y Strings en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ede7f6;
            margin: 0;
        }
        h2 {
            background: #6a1b9a;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        form {
            background: white;
            max-width: 600px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,.15);
        }
        label {
            font-weight: bold;
            color: #6a1b9a;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
        }
        button {
            background: #6a1b9a;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
        .resultados {
            max-width: 700px;
            margin: 20px auto;
        }
        .tarjeta {
            background: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 3px 8px rgba(0,0,0,.1);
            border-left: 6px solid #6a1b9a;
        }
    </style>
</head>
<body>

<h2>Procesamiento de Arrays y Strings en PHP</h2>

<form method="post">
    <label>Lista de palabras separadas por comas:</label>
    <input type="text" name="palabras" required>

    <label>Longitud mínima de palabra:</label>
    <input type="number" name="longitud" min="1" required>

    <label>Texto original:</label>
    <input type="text" name="texto" required>

    <label>Palabra a reemplazar:</label>
    <input type="text" name="buscar" required>

    <label>Nueva palabra:</label>
    <input type="text" name="reemplazar" required>

    <button type="submit" name="procesar">Procesar</button>
</form>

<?php
if (isset($_POST['procesar'])) {

    // Convertimos la cadena introducida en un array de palabras
    $arr = explode(",", $_POST['palabras']);

    // Guardamos la longitud mínima
    $minLong = (int)$_POST['longitud'];

    // Guardamos los datos del texto
    $texto = $_POST['texto'];
    $buscar = $_POST['buscar'];
    $reemplazar = $_POST['reemplazar'];
?>

<div class="resultados">

    <!-- TARJETA 1 -->
    <!--
    OBJETIVO:
    Mostrar todos los elementos del array original sueltos.
    -->

    <div class="tarjeta">
        <h3>Lista original</h3>
        <ul>
            <?php
            foreach ($arr as $palabra) {
                echo "<li>$palabra</li>";
            }
            ?>
        </ul>
    </div>

    <!-- TARJETA 2 -->
    <!--
    OBJETIVO:
    Mostrar el número total de palabras introducidas.
    -->

    <div class="tarjeta">
        <h3>Cantidad de palabras </h3>
        <p>Total: <b> <?php echo count($arr); ?> </b></p>
    </div>

    <!-- TARJETA 3 -->
    <!--
    OBJETIVO:
    Mostrar el array con el orden de los elementos invertido.
    -->

    <div class="tarjeta">
        <h3>Lista invertida </h3>
        <ul>
            <?php
            echo "<li>" . implode("</li><li>", array_reverse($arr))
            ?>
        </ul>
    </div>

    <!-- TARJETA 4 -->
    <!--
    OBJETIVO:
    Mostrar únicamente las palabras cuya longitud sea mayor o igual
    al valor indicado por el usuario.
    -->
   
    <div class="tarjeta">
        <h3>Filtrado por longitud </h3>
        <ul>
            <?php
            $filtro = array_filter($arr, function($palabra) use ($minLong) {
                return strlen(trim($palabra)) >= $minLong;
            });
            foreach ($filtro as $palabra) {
                echo "<li>$palabra</li>";
            }
            ?>
        </ul>
    </div>

    <!-- TARJETA 5 -->
    <!--
    OBJETIVO:
    Reemplazar una palabra por otra dentro de un texto.
    -->

    <div class="tarjeta">
        <h3>Reemplazo de texto </h3>
        <p>
            <?php
            echo str_replace($buscar, $reemplazar, $texto);
            ?>
        </p>
    </div>

</div>

<?php } ?>

</body>
</html>