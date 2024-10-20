<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento</title>
    <script src="cep.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

    <div id="form">
        <form action="tela_confirmacao.php" method="post">
            <table>
                <tr>
                    <td colspan="2">
                        <h1>Formulário de cadastramento</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nome">Digite seu nome: </label><br>
                        <input type="text" name="nome" value="<?php echo (isset($_GET["nome"])?$_GET["nome"]:"");?>">
                    </td>
                    <td>
                        <label for="cep">CEP:</label><br>
                        <input type="text" name="cep" id="cep" maxlength="8" onblur="pesquisacep(this.value)" value="<?php echo (isset($_GET["cep"])?$_GET["cep"]:"");?>">
                    </td>
                </tr>
        
                <tr>
                    <td >
                        <label for="sexo">Sexo:</label><br>
                        
                        <input type="radio" name="sexo" value="M">
                        <label for="M" class="seletor_sexo">Masculino</label><br>
                        
                        <input type="radio" name="sexo" value="F">
                        <label for="F" class="seletor_sexo">Feminino</label><br>

                        <input type="radio" name="sexo" value="Outro">
                        <label for="outro" class="seletor_sexo">Outro</label>
                    </td>
                    <td>
                        <label for="telefone">Telefone: </label><br>
                        <input type="text" name="telefone" value="<?php echo (isset($_GET["telefone"])?$_GET["telefone"]:"");?>">
                    </td>
                </tr>
        
                <tr>
                    <td>
                        <label for="email">E-mail: </label><br>
                        <input type="text" name="email" value="<?php echo (isset($_GET["email"])?$_GET["email"]:"");?>">
                    </td>
                    <td>
                        <label for="cpf">CPF: </label><br>
                        <input type="text" name="cpf" value="<?php echo (isset($_GET["cpf"])?$_GET["cpf"]:"");?>">
                    </td>
                </tr>
        
        
                <tr>
                    <td>
                        <label for="rua">Logradouro: </label><br>
                        <input type="text" name="rua" id="rua" value="<?php echo (isset($_GET["rua"])?$_GET["rua"]:"");?>">
                    </td>
                    <td>
                        <label for="cidade">Cidade: </label><br>
                        <input type="text" name="cidade" id="cidade" value="<?php echo (isset($_GET["cidade"])?$_GET["cidade"]:"");?>">
                    </td>
                </tr>
        
        
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Cadastrar" style="cursor: pointer">
                    </td>
                </tr>
        
            </table>
        </form>
    </div>

    <footer>
        <p>Aluno: Arthur Germano</p>
        <a href="https://github.com/ArthurGerman" target="_blank" style="cursor: pointer;">Mais códigos</a>
    </footer>

</body>
</html>