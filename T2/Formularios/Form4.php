<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    list($form_errors, $inputs) = validate_form();
    if ($form_errors){
        show_form($form_errors);
    } else{
        process_form();
        } 
    } else{
        show_form();
    }
    function process_form(){
        print "Hello, " . $_POST['my_name'];
        echo "<br>";
        print "You are " . $_POST['my_age']. " years old";
    }
    function show_form($errors=[]){
        if($errors){
            print 'Please correct these errors: <ul><li>';
            print implode('</li><li>', $errors);
            print '</li></ul>';
        }
        print<<<_HTML_
        <form method="POST" action="$_SERVER[PHP_SELF]">
        Your name: <input type="text" name="my_name">
        <br/>
        Your age: <input type="text" name="my_age">
        <br/>
        <input type = "submit" value = "Enviar">
        </form>
        _HTML_;
    }
    function validate_form(){
        $errors = array();
        $inputs = array();
        $inputs['my_name'] = trim($_POST['my_name'] ?? '');
        if (strlen($inputs['my_name']) == 0){
            $errors[] = 'Your name is required.';
        } else{
            if (strlen($_POST['my_name'])<3){
            $errors[] = 'Your name must be at least 3 letters long.';
        }
        }
        $inputs['my_age'] = filter_input(INPUT_POST, 'my_age', FILTER_VALIDATE_INT);
        if(is_null($inputs['my_age']) || ($inputs['my_age'] === false)){
            $errors[] = 'Please enter a valid age';
        } else{
            if($inputs['my_age'] < 18 || $inputs['my_age'] > 65){
                $errors[] = 'Enter an age between 18 and 65';
            }
        }
        return array($errors, $inputs);
    }
?>