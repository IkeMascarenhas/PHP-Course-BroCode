<?php
    include("database.php");

    $sql = "SELECT * FROM users ";
    $result = mysqli_query($conn, $sql);/*Retorna um array associativo*/

    /*Essa função retorna o número de linhas que veio no resultado
    A condição checa se tem mais de uma linha*/
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            //Enquanto tiver linhas vai fazer:
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        };
    } else{
        echo "No user found!";
    }

    mysqli_close($conn);/*Aparece como erro porque essa variável vem de outro arquivo*/
?>
