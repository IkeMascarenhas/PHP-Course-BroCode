<?php
    $password = "Pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("Pizza123", $hash)){
        echo "You are logged in!";
    } 
    else {
        echo "Incorrect password!";
    }

    echo "$hash";
?>