<?php
function countList() {
    if (func_num_args() == 0) {
        return false;
    } else {
        $count = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            $count += func_get_arg($i);
        }
        return $count;
    }
}

echo countList(1, 5, 9);

print "<br><br>";

function devolverArrayNumerico() {
    if (func_num_args() == 0) {
        return false;
    } else {
        $arr = array();
        for ($i = 0; $i < func_num_args(); $i++) {
            $arr[] = func_get_arg($i);
        }
        return $arr;
    }
}

print_r(devolverArrayNumerico(1, 5, 9));

print "<br><br>";
function devolverArray() {
    if (func_num_args() == 0) {
        return false;
    } else {
        $arr = array();
        for ($i = 0; $i < func_num_args(); $i++) {
            $arr[] = func_get_arg($i);
        }
        return $arr;
    }
}

print_r(devolverArray("Diego", "Zuleika", "Nico"));

print "<br><br>";

function takesTwo($a, $b) {
    if (isset($a)) {
        echo " a is set <br>";
    }
    if (isset($b)) {
        echo " b is set <br>";
    }
}
echo "<strong>Con dos argumentos:</strong><br>";
takesTwo(1, 2);
echo "<br>";
echo "<strong>Con un argumento:</strong><br>";
// takesTwo(1);
print "Uncaught ArgumentCountError: Too few arguments to function takesTwo()"
?>