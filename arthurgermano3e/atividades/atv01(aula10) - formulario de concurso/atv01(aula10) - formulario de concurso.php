<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="atv01.css">
    <link rel="stylesheet" href="php.css">

    <script>
        function confirmar() {
            window.alert("Os seus dados foram salvos");
        }
    </script>
</head>
<body>
    <img src="RF.png" alt="">


    <h1 align="center">PÁGINA DE CONFIRMAÇÃO</h1>

    <h2>Informações pessoais</h2>
    <p><strong>Nome completo: </strong> <?php echo $_POST["nome"]?></p>
    <p><strong>Data de nascimento: </strong> <?php echo $_POST["data_nascimento"]?></p>
    <p><strong>Sexo: </strong> <?php echo $_POST["sexo"]?></p>
    <p><strong>Estado civil: </strong> <?php echo $_POST["estado_civil"]?></p>
    <p><strong>Nacionalidade: </strong> <?php echo $_POST["nacionalidade"]?></p>
    <p><strong>Nº de RG: </strong> <?php echo $_POST["rg"]?></p>
    <p><strong>CPF: </strong> <?php echo $_POST["cpf"]?></p>

    <h2>Informações de endereço</h2>
    <p><strong>Logradouro: </strong> <?php echo $_POST["rua"]?></p>
    <p><strong>Número: </strong> <?php echo $_POST["numero"]?></p>
    <p><strong>Complemento: </strong> <?php echo $_POST["complemento"]?></p>
    <p><strong>Bairro: </strong> <?php echo $_POST["bairro"]?></p>
    <p><strong>Cidade: </strong> <?php echo $_POST["cidade"]?></p>
    <p><strong>UF: </strong> <?php echo $_POST["uf"]?></p>
    <p><strong>CEP: </strong> <?php echo $_POST["cep"]?></p>

    <h2>Informaçõess de contato</h2>
    <p><strong>Telefone: </strong> <?php echo $_POST["telefone"]?></p>
    <p><strong>E-mail: </strong> <?php echo $_POST["e-mail"]?></p>

    <button onclick="confirmar()" id="confirm">Confirmar</button>
    <button onclick="history.back()">Editar</button>


    <footer>
        <div id="footer">
            <hr>
            <p id="receita">Receita Federal® 2024 Todos os direitos reservados. </p>
        </div>
    </footer>

</body>
</html>
