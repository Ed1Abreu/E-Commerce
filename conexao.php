<?php
    $hostname ="localhost";
    $user = "root";
    $password = "";
    $database = "e-commerce";
    $conexao = mysqli_connect($hostname,$user,$password,$database);

    if(!$conexao){
        echo "Falha na conexão com o Banco de Dados";
    }

?>