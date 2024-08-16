<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Tranferência de dados com retorno</title>
</head>
<body>
    <form action="calcular.php" method="post">

        <label for="n1">Número 1:</label>
        <input type="number" name="n1" value="<?php echo (isset($_GET["n1"])?$_GET["n1"]:"");?>"><br> <!-- Primeiro campo -->

        <label for="n2">Número 2:</label> <!-- Primeiro campo -->
        <input type="number" name="n2" value="<?php echo (isset($_GET["n2"])?$_GET["n2"]:"");?>"><br>

        <input type="submit" value="Somar"><br> <!-- Botão de soma -->

        Resultado: <input type="text" width="5" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>"><br> <!-- Primeiramente, o comando isset executa o primeiro GET, se o primeiro GET retornar um erro(sem valores para o parâmetro), automaticamente é apresentando o espaço com as aspas. No entento, se o primeiro GET apresenta um valor dentro do parâmetro "res", ele automaticamente executa o segundo GET. O comando isset tem a função de verificar condições durante o carregamento. No caso acima, o isset está verificando se o parametro "res" existe, se sim ele extrai através do comando GET senão, ele apresenta apenas um campo em branco. -->
    </form>
</body>
</html>