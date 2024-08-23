<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Atividade do formulãrio com validação condicional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $user = $_POST["usuario"];
        $pass = $_POST["senha"];

        if($user == "maria" and $pass == "12345"){
            echo "Bem vindo(a), $user!";
        }
        else{
            $erro = "USUÁRIO OU SENHA INCORRETOS";
            header("location: index.php?erro=$erro");
        }
    ?>
</body>
</html>