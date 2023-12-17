<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" name="credit_card" id="" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" id="" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="credit_card" id="" value="American Express">
        American Express <br>
        <button type="submit" name="confirm" value="confirm">Confirm</button>
    </form>
</body>
</html>
<?php

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card){
            case "Visa":
                echo "You selected Visa";
                break;
            case "Mastercard":
                echo "You selected Mastercard";
                break;
            case "American Express":
                echo "You selected American Express";
                break;
            default:
            echo "Please make a selection";
        }

    }
?>