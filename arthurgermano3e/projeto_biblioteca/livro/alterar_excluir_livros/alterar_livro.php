<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro de Livros</title>
</head>
<body>
    <header>
        <a href="/arthurgermano3e/projeto_biblioteca/index.html"><button title="Voltar ao início">Home</button></a>
        <!-- <h1 class="text-center">SISTEMA BIBLIOTECA</h1>
        <h3 class="text-center">ALTERAR CADASTRO DE LIVROS</h3>
     -->
    </header>

    <?php
        include "./config.php"; // Inclui o arquivo de configuração do banco de dados

        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtém os dados do formulário
            $cod_livro = $_POST['cod_livro'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
            $ano_publicacao = $_POST['ano_publicacao'];
            $genero = $_POST['genero'];

            $sql = "UPDATE livro SET 
                            titulo = '$titulo', 
                            autor = '$autor', 
                            editora = '$editora',  
                            ano_publicacao = '$ano_publicacao', 
                            genero = '$genero' 
                        WHERE cod_livro = $cod_livro";

                // Executa a consulta
                if (mysqli_query($conn, $sql)) {
                    echo "<p>Livro atualizado com sucesso!</p>";
                } else {
                    echo "<p>Erro ao atualizar o livro: " . mysqli_error($conn) . "</p>";
                }
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conn);

        // Redireciona para a página de listagem de livros ou qualquer outra página desejada
        echo '<a href="./listar_livro.php">Voltar para a lista de livros</a>';
    ?>

</body>
</html>