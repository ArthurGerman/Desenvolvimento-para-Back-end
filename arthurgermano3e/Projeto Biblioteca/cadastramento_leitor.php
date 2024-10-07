<?php 
    include "config.php";

    if(!$conn){
        die("Falha na conexão {mysqli_connect_error()}");
    }

    // recebe os dados do formulário
    $nome = "";
    $sexo = "";
    $telefone = "";
    $email = "";
    $cpf = "";
    $rua = "";
    $cidade = "";

    //variável para inserir o registro
    $sql = "";
?>