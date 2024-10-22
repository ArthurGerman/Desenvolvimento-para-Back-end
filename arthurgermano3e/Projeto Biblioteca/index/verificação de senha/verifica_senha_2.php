<?php 
    $senha = "$_POST[senha]";

    if ($senha == "1234"){
        header("Location: http://localhost/arthurgermano3e/Projeto%20Biblioteca/livro/index.html");
        exit();
    }
    else{
        $senha_incorreta = "Senha incorreta";
        header("location: ./verifica_senha.php?senha_incorreta=$senha_incorreta");
        exit();
    };

?>