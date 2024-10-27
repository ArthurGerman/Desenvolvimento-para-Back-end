<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Verificação de administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="./verifica_senha.php" method="post">

            <table>
                <tr>
                    <td>
                        <h1>Login de administrador</h1>
                    </td>
                </tr>


                <tr>
                    <td><input type="text" name="usuario" placeholder="Usuário" style="color: red;" value="<?php echo(isset($_GET["usuario_invalido"])?$_GET["usuario_invalido"]:"");?>"></td>
                </tr>

                <tr>
                    <td><input type="text" name="senha" placeholder="Senha" style="color: red;" value="<?php echo(isset($_GET["senha_invalida"])?$_GET["senha_invalida"]:"");?>"></td>
                </tr>

                <tr>
                    <td><input id="botao" type="submit" value="Acessar"></td>
                </tr>
            </table>

        
        </form>
    </div>
</body>
</html>