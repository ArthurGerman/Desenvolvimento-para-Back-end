<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Edição de cadastro de leitor</title>
</head>
<body>

    <?php 
        include "./config.php";

        $id_leitor = isset($_POST['id_leitor'])? (int)$_POST['id_leitor'] : null;

        if ($id_leitor > 0) {
        $sql ="select * from leitor where id_leitor=$id_leitor";
        $resultado = mysqli_query($conn,$sql) or die ("Não foi possível realizar a consulta");

        $linha = mysqli_fetch_array($resultado);

        if (!$linha) {
            die("Registro não encontrado.");
        }
    };
    ?>

    <div id="form">
        <form action="altera_leitor.php" method="post">
            <table>
                <tr>
                    <td colspan="2">
                        <h1>Alteração de cadastro de usuário</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <label for="id_leitor">Código: </label><br>
                        <input type="text" class="campo" id="id_leitor" name="id_leitor" readonly value="<?php
                        echo isset($linha['id_leitor']) ? htmlspecialchars($linha['id_leitor']) : '' ?>" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nome">Nome: </label><br>
                        <input class="campo" type="text" name="nome" value="<?php
                        echo isset($linha['nome']) ? htmlspecialchars($linha['nome']) : '' ?>" required>
                    </td>
        
                    <td>
                        <label for="cep">Cep: </label><br>
                        <input class="campo" type="text" name="cep" id="cep" maxlength="8" onblur="pesquisacep(this.value)">
                    </td>
                </tr>
        
                <tr>
                    <td>
                        <label for="email">E-mail: </label><br>
                        <input class="campo" type="text" name="email" value="<?php echo isset($linha['email']) ? htmlspecialchars($linha['email']) : ''; ?>" required>
                    </td>
                    <td>
                        <label for="telefone">Telefone: </label><br>
                        <input class="campo" type="text" name="telefone" value="<?php echo isset($linha['telefone']) ? htmlspecialchars($linha['telefone']) : ''; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cpf">CPF: </label><br>
                        <input class="campo" type="text" name="cpf" value="<?php
                        echo isset($linha['CPF']) ? htmlspecialchars($linha['CPF']) : '' ?>" required>
                    </td>
        
                    <td>
                        <label for="endereco">Endereço: </label><br>
                        <input class="campo" type="text" name="rua" id="rua" value="<?php
                        echo isset($linha['rua']) ? htmlspecialchars($linha['rua']) : '' ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cidade">Cidade: </label><br>
                        <input class="campo" type="text" name="cidade" id="cidade" value="<?php
                        echo isset($linha['cidade']) ? htmlspecialchars($linha['cidade']) : '' ?>" required>
                    </td>
                    <td>
                    <label for="sexo">Sexo:</label><br>
                    <select name="sexo" id="">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                    </td>
        
                <tr>
                    <!-- <td>
                        <button  style="height: 30px; margin-right: 5px; margin-top: 20px; cursor: pointer;" type="button" onclick="window.location.href='./index.html' ">Voltar</button>
                    </td> -->
                    <td colspan="2" style="text-align: center;">
                        <input id="botao" type="submit" value="Atualizar" style="cursor: pointer">
                        <input type="button" value="Excluir" onclick="excluirLeitor()"/>
                    </td>
                </tr>
        
            </table>
        </form>
    </div>

    <script>
        function excluirLeitor() {
        if (confirm('Tem certeza que deseja excluir este cadastro?')) {
            // Aqui você pode adicionar a lógica para excluir o leitor, talvez redirecionando para uma página PHP
            window.location.href = 'excluir_leitor.php?id_leitor=' + document.getElementById('id_leitor').value;
        }
        }
  </script>
</body>
</html>

<!-- <button  
style="height: 30px; 
margin-right: 5px; 
margin-top: 20px; 
cursor: pointer; 
background-color: rgba(255, 255, 255, 0.548); 
border: none; 
border-radius: 3px;"

type="button" onclick="window.location.href='/arthurgermano3e/projeto_biblioteca/leitor/alterar_excluir_leitor/listar_leitor.php'">Voltar</button> -->