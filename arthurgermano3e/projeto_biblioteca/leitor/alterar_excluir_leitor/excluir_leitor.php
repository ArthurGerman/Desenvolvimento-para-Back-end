<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir leitor</title>
</head>
<body>
    
    <header>
        <a href="/arthurgermano3e/projeto_biblioteca/index.html"><button title="Voltar ao início">Home</button></a>
        <h1 class="text-center">SISTEMA BIBLIOTECA</h1>
        <h3 class="text-center">CADASTRO DE LEITORES</h3>
        <hr>
    </header>

    <?php
    // Conexão com o banco de dados
    include "./config.php";

    if (isset($_GET['id_leitor'])) {
        $id_leitor = $_GET['id_leitor'];

        // Certifique-se de que o codleitor é um número inteiro para evitar SQL Injection
        $id_leitor = (int)$id_leitor;

        // Executando a consulta diretamente
        $sql = "DELETE FROM leitor WHERE id_leitor = $id_leitor";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Cadastro excluído com sucesso.');</script>";
        } else {
            echo "Erro ao excluir cadastro: " . mysqli_error($conn);
        }
    }

    $conn->close();
    ?>
</body>
</html>