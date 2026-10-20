<?php
$meal = [
    "breakfast" => "coffee",
    "snack"     => "sandwich",
    "lunch"     => "pizza",
    "dinner"    => "omelette"
];

function print_table($array) {
    echo "<style>
        table {
            border-collapse: collapse;
            width: 15%;
            font-family: Arial, sans-serif;
            margin: 10px 0;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 6px 6px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>";

    echo "<table>";
    echo "<thead>";
    echo "<tr><th>Momento</th><th>Comida</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($array as $key => $value) {
        echo "<tr>";
        echo "<td>" . ucfirst($key) . "</td>";
        echo "<td>" . ucfirst($value) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}

print_table($meal);

?>