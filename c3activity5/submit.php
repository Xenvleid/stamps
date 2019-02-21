<?php
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    
    //check if the user/pass are correct
    if ($user == "admin" && $pass == "pass1234") {
        echo "You logged in correctly";
    } else {
        header("Location: login.php?error=1");
    }
?>
