<?php
    setcookie("fav_food", "pizza", time() + -0, "/");
    setcookie("fav_drink", "coffee", time() + (86400 *3), "/");
    setcookie("fav_desert", "Ice Cream", time() + (86400 *3), "/");

    foreach($_COOKIE as $key => $value){
        echo "$key = $value <br>";
    };

    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]}";
    } else {
        echo "I don't know your favorite food";
    }
?>