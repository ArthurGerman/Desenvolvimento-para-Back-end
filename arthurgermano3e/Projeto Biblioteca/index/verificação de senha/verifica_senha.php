<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./verifica_senha_2.php" method="post">
        <input type="text" name="senha" placeholder="Digite a senha: " value="<?php echo(isset($_GET["senha_incorreta"])?$_GET["senha_incorreta"]:"");?>">

        <input type="submit" value="Acessar">
    </form>
</body>
</html>