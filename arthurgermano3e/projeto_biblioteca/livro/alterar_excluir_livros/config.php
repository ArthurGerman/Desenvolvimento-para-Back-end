<?php 
    // Configuração do Banco de Dados
    $db_host = "localhost"; // Hostname do servidor do Banco de Dados
    $db_user = "root"; // Nome do usuário para conectar ao Banco de Dados
    $db_pass = ""; // Senha para acesso ao Banco de Dados
    $db_name = "db_biblioteca"; // Nome do Banco de Dados a ser conectado

    // Conectar ao Banco de Dados
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


    // Verificar se a conexão foi bem-secedida ou não
    if ($conn->connect_error){
        // Se houver um erro, exibir a mensagem de erro e encerrar a execução do script
        // A seta -> é usada para acessar propriedades e métodos de objetos em PHP, tornando o código mais legível e fácil de manter

        die("Conexão fallhou: {$conn->connect_error}");
    }
    else{
        
    }
?>