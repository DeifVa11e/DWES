<?php
function selection($numOptions, $selectName) {
    echo "<select name=\"$selectName\">";

    $i = 1;
    while ($i <= $numOptions) {
        echo "<option>$i</option>";
        $i++;
    }

    echo "</select>";
}

selection(10, "people");
?>