<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($form_errors = validate_form()){
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
        <input type = "submit" value = "Say Hello">
        </form>
        _HTML_;
    }
    function validate_form(){
        $errors = array();
        if (strlen($_POST['my_name'])<3){
            $errors[] = 'Your name must be at least 3 letters long.';
        }
        $ok = filter_input(INPUT_POST, 'my_age', FILTER_VALIDATE_INT);
        if(is_null($ok) || ($ok === false)){
            $errors[] = 'Please enter a valid age';
        }
        return $errors;
    }
?>