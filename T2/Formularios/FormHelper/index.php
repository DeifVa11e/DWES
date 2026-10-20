<?php

require 'FormHelper2.php';

// Selects
$GLOBALS['pizzas'] = array("pork" => "BBQ Pork Pizza", "chicken" => "Chicken Pizza", "vegetarias" => "Veggie Pizza");

$GLOBALS['ingredients'] = array("cheese" => "Extra cheese", "jam" => "Jam", "mushrooms" => "Mushrooms");

$GLOBALS['sizes'] = array("large" => "Large", "medium" => "Medium", "small" => "Small");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    list($errors, $input) = validateForm();
    if ($errors) {
        showForm($errors, $input);
    } else {
        procesarForm($input);
    }
} else {
    showForm();
}

function procesarForm($input) {
    print htmlentities($input['name']) . " de " . $input['age'] . " años, ha pedido una pizza de "
        . $GLOBALS['pizzas'][$input['pizza']] . " de tamaño " . $GLOBALS['sizes'][$input['size']]
        . " con " . implode(", ", $input['ingredients']) . " el " . $input['date'] . "<br>";
    print $input['delivery'] ? "Es para llevar" : "No es para llevar";
}

function showForm($errors = [], $input = []) {
    $default = array(
    'name' => 'Pon tu nombre aquí',
    'age' => 'Pon tu edad aquí',
    'pizza' => 'pork',
    'ingredients' => array('cheese'),
    'size' => 'small',
    'date' => date('Y-m-d')
    );

    if(isset($input) && count($input) > 0) {
        $form = new formHelper($input);
    } else {
        $form = new formHelper($default);
    }
    include 'form.html.php';
}

function validateForm() {
    $errors = array();
    $input = array();

    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT,
        array('options' => array('min_range' => 18, 'max_range' => 65)));
    if (is_null($input['age']) || $input['age'] === false) {
        $errors[] = "Please enter a valid age between 18 and 65";
    }

    $input['name'] = trim($_POST['name'] ?? '');
    if (strlen($input['name']) == 0) {
        $errors[] = 'Name is required';
    }

    $input['pizza'] = trim($_POST['pizza'] ?? '');
    if (!array_key_exists($input['pizza'], $GLOBALS['pizzas'])) {
        $errors[] = 'Please select a valid pizza';
    }

    $input['ingredients'] = $_POST['ingredients'] ?? array();
    if (!is_array($input['ingredients'])) {
        $input['ingredients'] = array();
    }
    if (count($input['ingredients']) < 2) {
        $errors[] = "Two ingredients are required";
    } elseif (array_diff($input['ingredients'], array_keys($GLOBALS['ingredients']))) {
        $errors[] = "Please select valid ingredients";
    }

    $input['size'] = trim($_POST['size'] ?? '');
    if (!array_key_exists($input['size'], $GLOBALS['sizes'])) {
        $errors[] = "Please select a valid size";
    }

    $input['date'] = trim($_POST['date'] ?? '');

    $date = DateTime::createFromFormat('Y-m-d', $input['date']);
    if (!$date || $date->format('Y-m-d') !== $input['date']) { 
        $errors[] = 'Please enter a valid date (YYYY-MM-DD)';
    } else {
        $limit = new DateTime('-6 months midnight'); 
        $today = new DateTime('today'); 
        if ($date->setTime(0, 0) < $limit || $date > $today) {
            $errors[] = 'Date must be within the last 6 months';
        }
    }

    $input['delivery'] = isset($_POST['delivery']);

    return array($errors, $input);
}

?>