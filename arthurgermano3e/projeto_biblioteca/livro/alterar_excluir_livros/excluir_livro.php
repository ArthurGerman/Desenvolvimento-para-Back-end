<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir livro</title>
</head>
<body>
<?php
// Conexão com o banco de dados
    include "./config.php";

    if (isset($_GET['cod_livro'])) {
        $cod_livro = $_GET['cod_livro'];

        // Certifique-se de que o codleitor é um número inteiro para evitar SQL Injection
        $cod_livro = (int)$cod_livro;

        // Executando a consulta diretamente
        $sql = "DELETE FROM livro WHERE cod_livro = $cod_livro";

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