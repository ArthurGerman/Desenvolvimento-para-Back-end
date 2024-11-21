<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Alterar/excluir livro</title>
</head>
<body>

    <header>
    <a href="/arthurgermano3e/projeto_biblioteca/index.html"><button title="Voltar ao início">Home</button></a>
        <!-- <h1 class="text-center">SISTEMA BIBLIOTECA</h1>
        <h3 class="text-center">ALTERAR CADASTRO DE LIVROS</h3> -->
    
    </header>
    
    <?php
        include "./config.php";

        $cod_livro = isset($_POST['cod_livro']) ? (int)$_POST['cod_livro'] : null;

        if ($cod_livro > 0) {
            $sql = "SELECT * FROM livro WHERE cod_livro = $cod_livro";
            $resultado = mysqli_query($conn, $sql) or die("Não foi possível realizar a consulta");

            $linha = mysqli_fetch_array($resultado);

            if (!$linha) {
                echo "<p style='color: red;'>Registro não encontrado.</p>";
            }
        }
    ?>

    <div id="form">
        <form action="alterar_livro.php" method="post" style="width: 600px;
        justify-content:center;
        display:flex;">
                <table border="0">
                    <tr>
                        <td colspan="2" style="padding: 20px;">
                            <h1>Alteração de cadastro de livro</h1>
                        </td>
                    </tr>
        
                    <tr>
                        <td align="center">
                            <label for="cod_livro">Código: </label><br>
                            <input type="text" id="cod_livro" name="cod_livro" readonly value="<?php
                            echo isset($linha['cod_livro']) ? htmlspecialchars($linha['cod_livro']) : '' ?>" required />
                        </td>
                    
                        <td align="center">
                            <label for="titulo">Título: </label><br>
                            <input type="text" name="titulo" value="<?php
                            echo isset($linha['titulo']) ? htmlspecialchars($linha['titulo']) : '' ?>" required>
                        </td>
        
                    </tr>
        
                    <tr>
                        <td align="center">
                            <label for="editora">Editora: </label><br>
                            <input type="text" name="editora" value="<?php echo isset($linha['editora']) ? htmlspecialchars($linha['editora']) : ''; ?>" required>
                        </td>
        
                        <td align="center">
                            <label for="autor">Autor: </label><br>
                            <input type="text" name="autor" value="<?php
                            echo isset($linha['autor']) ? htmlspecialchars($linha['autor']) : '' ?>" required>
                        </td>
                    </tr>
        
                    <tr>
                        <td align="center">
                            <label for="genero">Gênero: </label><br>
                            <input type="text" name="genero" value="<?php
                            echo isset($linha['genero']) ? htmlspecialchars($linha['genero']) : '' ?>" required>
                        </td>
                        <td align="center">
                            <label for="ano_publicacao">Ano de publicação: </label><br>
                            <input type="text" name="ano_publicacao" value="<?php echo isset($linha['ano_publicacao']) ? htmlspecialchars($linha['ano_publicacao']) : ''; ?>" required>
                        </td>
                    </tr>
        
        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input id="botao" type="submit" value="Atualizar" style="cursor: pointer">
        
                            <input style="width: fit-content;" value="Excluir" type="button" onclick="excluirLivro()">
                        </td>
                    </tr>
        
                </table>
        </form>
    </div>


    <script>
        function excluirLivro() {
        if (confirm('Tem certeza que deseja excluir este livro?')) {
            // Redireciona para a página de exclusão
            window.location.href = 'excluir_livro.php?cod_livro=' + document.getElementById('cod_livro').value;
        }
        }
    </script>
</body>
</html>