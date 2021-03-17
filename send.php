<?php
    //retrieve all values from the server
    $fieldEmail = $_POST['fieldEmail']; 
    $fieldSubject = $_POST['fieldSubject'];
    $fieldMessage = $_POST['fieldMessage'];
     
    //error checking on the server side
    $errors = 0;

    $errorMessage = "";

    if ($fieldEmail == "") { $errors = 1; $errorMessage = "Email required"; }
    if ($fieldSubject == "") { $errors = 2; $errorMessage = "Subject required"; }
    if ($fieldMessage == "") { $errors = 3; $errorMessage = "Message required"; }
    

    //if errors
    if ($errors != 0) {
        //return error message
        echo "errors detected: $errorMessage";
    } else {
    //otherwise
        //return OK
        echo "OK";
    }


?>