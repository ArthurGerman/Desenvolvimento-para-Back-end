<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Atividade do formulãrio com validação condicional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="verificacao.php" method="post">

        <table>
            <tr>
                <td><h1>PÁGINA DE ACESSO</h1></td>
            </tr>

            <tr align="center">
                <td><label for="usuario">Usuário: </label><br></td>
            </tr>
            <tr>
                <td><input type="text" name="usuario" placeholder="Digite seu aqui seu usuário"><br></td>
            </tr>

            <tr align="center">
                <td><label for="Senha">Senha: </label><br></td>
            </tr>
            <tr>
                <td><input type="password" name="senha" placeholder="Digite aqui sua senha"><br></td>
            </tr>

            <tr align="center">
                <td><input type="submit" value="Acessar"></td>
            </tr>
    
            <tr align="center">
                <td><p id="resultado"><?php echo (isset($_GET["erro"])?$_GET["erro"]:"");?></p></td>
            </tr>
        </table>

    </form>
    
</body>
</html>