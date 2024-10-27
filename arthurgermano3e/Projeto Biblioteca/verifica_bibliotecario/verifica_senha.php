<?php 

    include "../leitor/config.php";

    if(!$conn){
        die("Falha na conexão" . mysqli_connect_error()
    );
    }


    $usuario = "$_POST[usuario]";
    $senha = "$_POST[senha]";

    $sql = "SELECT * FROM bibliotecario WHERE usuario = '$usuario' AND senha = '$senha'";

    $query = mysqli_query(mysql: $conn, query: $sql) or die(mysqli_error(mysql: $conn));

    if(mysqli_num_rows($query)<=0){
        $usuario_invalido = "Usuário inválido";
        $senha_invalida = "Senha inválida";
        header("location: ./form_senha.php?usuario_invalido=$usuario_invalido&senha_invalida=$senha_invalida");
    }
    
    else{
        header("location: /arthurgermano3e/projeto_biblioteca/livro/index.html");
    }


?>