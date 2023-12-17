<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    This is the home page <br>
    <a href="sessionLogin.php">This goes to the Login page</a><br>
    <form action="home.php" method="post">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
</html>
<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: sessionLogin.php");
    }
?>