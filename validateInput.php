<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validateInput.php" method="post">
        Username: <br>
        <input type="text" name="username"> <br>
        Age: <br>
        <input type="text" name="age"> <br>
        Email: <br>
        <input type="text" name="email"> <br>
        <button type="submit" name="login" value="login">login</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);

        // if(empty($age)){
        //     echo "That number wasn't valid";
        // } else {
        //     echo "You are $age years old";
        // }

        if(empty($email)){
            echo "That email wasn't valid";
        } else {
            echo " Your email is: $age";
        }
    }
?>