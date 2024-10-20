<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Página de confirmação</h1>

    <p><strong>Nome completo: </strong> <?php echo $_POST["nome"]?></p>
    <p><strong>CEP: </strong> <?php echo $_POST["cep"] ?> </p>
    <p><strong>Sexo: </strong> <?php echo $_POST["sexo"]?></p>
    <p><strong>Telefone: </strong> <?php echo $_POST["telefone"]?></p>
    <p><strong>Email: </strong> <?php echo $_POST["email"]?></p>
    <p><strong>CPF: </strong> <?php echo $_POST["cpf"]?></p>
    <p><strong>Logradouro: </strong> <?php echo $_POST["rua"]?></p>
    <p><strong>Cidade: </strong> <?php echo $_POST["cidade"]?></p>


    <form action="cadastramento_leitor.php" method="post" >

        <input type="hidden" name="nome" value="<?php echo $_POST["nome"]?>">
        <input type="hidden" name="cep" value="<?php echo $_POST["cep"]?>">
        <input type="hidden" name="sexo" value="<?php echo $_POST["sexo"]?>">
        <input type="hidden" name="telefone" value="<?php echo $_POST["telefone"]?>">
        <input type="hidden" name="email" value="<?php echo $_POST["email"]?>">
        <input type="hidden" name="cpf" value="<?php echo $_POST["cpf"]?>">
        <input type="hidden" name="rua" value="<?php echo $_POST["rua"]?>">
        <input type="hidden" name="cidade" value="<?php echo $_POST["cidade"]?>">

        <input type="submit" value="Cadastrar">
    </form>

    <form action="index.php" method="get">
        <input type="hidden" name="nome" value="<?php echo $_POST["nome"] ?>">
        <input type="hidden" name="cep" value="<?php echo $_POST["cep"] ?>">
        <input type="hidden" name="sexo" value="<?php echo $_POST["sexo"] ?>">
        <input type="hidden" name="telefone" value="<?php echo $_POST["telefone"]?>">
        <input type="hidden" name="email" value="<?php echo $_POST["email"]?>">
        <input type="hidden" name="cpf" value="<?php echo $_POST["cpf"]?>">
        <input type="hidden" name="rua" value="<?php echo $_POST["rua"]?>">
        <input type="hidden" name="cidade" value="<?php echo $_POST["cidade"]?>">

        <input type="submit" value="Alterar">
    </form>

    <!-- <button><a href="index.html">Alterar</a></button> -->

</body>
</html>