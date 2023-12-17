<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "phpcoursedb";
    $conn = "";

    try{ //Tenta fazer a conexão
        $conn = mysqli_connect($db_server, 
                            $db_user, 
                            $db_password, 
                            $db_name);
    }//Se a conexão não for bem-sucedida vai pro bloco catch que vai tem o erro como parâmetro
    catch(mysqli_sql_exception){
        echo "Could not connect <br>";
    }
                            
    /*Verificar se a conexão está funcionando*/
    if($conn){
        
    }

?>