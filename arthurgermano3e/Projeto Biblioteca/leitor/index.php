<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,400&display=swap" rel="stylesheet">
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
                        <h1>Cadastro de novo usuário</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input placeholder="Seu nome" type="text" name="nome" value="<?php echo (isset($_GET["nome"])?$_GET["nome"]:"");?>">
                    </td>

                
                    <td>
                        <input placeholder="Digite o CEP" type="text" name="cep" id="cep" maxlength="8" onblur="pesquisacep(this.value)" value="<?php echo (isset($_GET["cep"])?$_GET["cep"]:"");?>">
                    </td>
                </tr>
        
                <tr>
                    <td>
                        <input placeholder="Telefone" type="text" name="telefone" value="<?php echo (isset($_GET["telefone"])?$_GET["telefone"]:"");?>">
                    </td>
              
                    <td>
                        <input placeholder="Digite seu E-mail" type="text" name="email" value="<?php echo (isset($_GET["email"])?$_GET["email"]:"");?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input placeholder="CPF" type="text" name="cpf" value="<?php echo (isset($_GET["cpf"])?$_GET["cpf"]:"");?>">
                    </td>
               
                    <td>
                        <input placeholder="Endereço" type="text" name="rua" id="rua" value="<?php echo (isset($_GET["rua"])?$_GET["rua"]:"");?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input placeholder="Cidade" type="text" name="cidade" id="cidade" value="<?php echo (isset($_GET["cidade"])?$_GET["cidade"]:"");?>">
                    </td>

                    <td >
                        <label for="sexo">Sexo:</label><br>

                        <select name="sexo" id="">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                        
                    </td>
                </tr>
        
        
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input id="botao" type="submit" value="Cadastrar" style="cursor: pointer">
                    </td>
                </tr>
        
            </table>
        </form>
    </div>


</body>
</html>