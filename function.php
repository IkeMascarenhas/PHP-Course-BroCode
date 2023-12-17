<?php
//  function happy_birthday($first_name, $age){
//     echo "Happy Birthday dear $first_name! <br>";
//     echo "Happy Birthday to you! <br>";
//     echo "Happy Birthday dear $first_name! <br>";
//     echo "You are $age years old! <br><br>";
//  }
//  happy_birthday("Spongebob", 17);
//  happy_birthday("Patrick", 30);

function is_even($number){
    $result = $number % 2;
    return $result >= 1 ? "Odd" : "Even";
}

echo is_even(10);
?>