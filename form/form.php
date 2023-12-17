<?php
    include("database.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="
    form.css">
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"] )?>" method="post">
        <h2>Welcome to fakebook!</h2>
        Username: 
        <input type="text" name="username"> 
        Password: 
        <input type="password" name="password"> 
        <button type="submit" name="Submit">Register</button>
    </form>
    
</body>
</html>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "<span class='userReturn'>Please enter a username!</span>";
        }
        elseif(empty($password)){
            echo "<span class='userReturn'>Please enter a password!</span>";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

            try{
                mysqli_query($conn, $sql);
                echo "<span class='userReturn'>You are now registered!</span>";
            }catch(mysqli_sql_exception){
                echo "<span class='userReturn'>That username is taken!</span>";
            }
            
        }
    }

    mysqli_close($conn);
?>