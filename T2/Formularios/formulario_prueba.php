<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            background: #1565c0;
            color: white;
            padding: 20px;
            margin: 0;
            border-bottom: 4px solid #0d47a1;
        }

        form {
            background: white;
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        label {
            font-weight: bold;
            color: #1565c0;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        button {
            background-color: #1565c0;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #0d47a1;
            transform: scale(1.02);
        }

        .resultados {
            width: 90%;
            max-width: 700px;
            margin: 20px auto;
        }

        .tarjeta {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .tarjeta h3 {
            margin-top: 0;
            color: #0d47a1;
            border-bottom: 2px solid #1976d2;
            padding-bottom: 6px;
        }

        .azul { border-left: 6px solid #2196f3; }
        .verde { border-left: 6px solid #43a047; }
        .naranja { border-left: 6px solid #fb8c00; }
        .rojo { border-left: 6px solid #e53935; }
        .gris { border-left: 6px solid #757575; }
        .violeta { border-left: 6px solid #8e24aa; }
    </style>
</head>
<body>

<h2>Manejo de Strings y Arrays en PHP</h2>
<form method="POST">
    <label>Ingrese una lista de nombres separados por comas:</label>
    <input type="text" name="nombres" placeholder="Ej: Ana, Bruno, Carla, Daniel" required>

    <label>Índice de inicio para extraer sublista:</label>
    <input type="number" name="inicio" min="0" required>

    <label>Cantidad de elementos a extraer:</label>
    <input type="number" name="cantidad" min="1" required>

    <label>Nombre a verificar si está en la lista:</label>
    <input type="text" name="nombre_buscar" placeholder="Ej: Elena" required>

    <label>Nombre para buscar posición:</label>
    <input type="text" name="nombre_pos" placeholder="Ej: Carla" required>

    <label>Ingrese dos nombres para comparar (strcmp):</label>
    <input type="text" name="nombre1" placeholder="Ej: Ana" required>
    <input type="text" name="nombre2" placeholder="Ej: Bruno" required>

    <label>Ingrese una frase para dividirla con strtok:</label>
    <textarea name="frase" rows="2" placeholder="Ej: PHP es un lenguaje poderoso"></textarea>

    <button type="submit" name="enviar">Procesar</button>
</form>

<?php
if (isset($_POST['enviar'])) {
    //1 y 2 Captura de datos del formulario
    $nombre = array_map('trim',  explode(",", $_POST['nombres']));
    $inicio = $_POST['inicio'];
    $cantidad = (int) $_POST['cantidad'];
    $verificar_name = trim($_POST['nombre_buscar']);
    $name_pos = trim($_POST['nombre_pos']);
    $name1 = trim($_POST['nombre1']);
    $name2 = trim($_POST['nombre2']);
    $dividir_frase = trim($_POST['frase']);

    ?>

    <div class="resultados">
        <!--  3  -->
        <div class="tarjeta azul">
            <h3>Lista completa de nombres</h3>
            <ul>
                <?php
                foreach ($nombre as $nombres) {
                    echo "<li>$nombres</li>";
                }
                ?>
            </ul>
        </div>

        <!-- 4  -->
        <div class="tarjeta verde">
            <h3>Sublista </h3>
            <?php
            $sublista = array_slice($nombre, $inicio, $cantidad);
            if (!empty($sublista)) {
                echo "<ul>";
                foreach ($sublista as $item) echo "<li>$item</li>";
                echo "</ul>";
            } else {
                echo "<p>No se pudieron extraer los elementos de esta sublista</p>";
            }
            ?>
        </div>

        <!-- 5  -->
        <div class="tarjeta naranja">
            <h3>Verificación </h3>
            <?php
            if (in_array($verificar_name, $nombre)) {
                echo "El nombre $verificar_name se encuentra en el texto";
            } else {
                echo "No se encuentra";
            }
            ?>
        </div>

        <!-- 6  -->
        <div class="tarjeta rojo">
            <h3>Búsqueda </h3>
            <?php
            $pos = array_search($name_pos, $nombre);
            if ($pos !== false) {
                echo "El nombre $name_pos, se encuentra en la posición $pos";
            } else {
                echo "No se encontró el nombre en ninguna posición";
            }
            ?>
        </div>


        <!-- 7 strcmp -->
        <div class="tarjeta violeta">
            <h3>Comparación de cadenas </h3>
            <?php
            if (strcmp($name1, $name2)) {
                echo "si";
            } else {
                echo "no";
            }
            ?>
        </div>

        <!-- 8  -->
        <div class="tarjeta verde">
            <h3>Transformación </h3>
            <?php
            $mayus = array_map('strtoupper', $nombre);
            echo "<p>Nombre en mayusculas</p><ul>";
            foreach ($mayus as $m) echo "<li>$m</li>";
            echo "</ul>";
            ?>
        </div>

        <!--9   -->
        <div class="tarjeta azul">
            <h3>Separación de frase </h3>
            <?php
            echo "<ul>";
                $token = strtok($dividir_frase, " ");
                while ($token !== false) {
                    echo "<li>" . htmlspecialchars($token) . "</li>";
                    $token = strtok(" ");
                }
                echo "</ul>";
            ?>
        </div>
    </div>

    <?php } ?>
</body>
</html>