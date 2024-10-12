<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "config.php";

        if(!$conn){
            die("Falha na conexão" . mysqli_connect_error()
        );
        }

        // recebe os dados do formulário
        $nome = "$_POST[nome]";
        $sexo = "$_POST[sexo]";
        $telefone = "$_POST[telefone]";
        $email = "$_POST[email]";
        $cpf = "$_POST[cpf]";
        $rua = "$_POST[rua]";
        $cidade = "$_POST[cidade]";

        //variável para inserir o registro
        $sql = "INSERT INTO leitor (nome, sexo, telefone, email, CPF, rua, cidade)
                VALUES(
                    '$nome',
                    '$sexo',
                    '$telefone',
                    '$email',
                    '$cpf',
                    '$rua',
                    '$cidade'
                )";

        // Executa a consulta SQL. Se falhar, exibe o erro do Banco de Dados

        $query = mysqli_query(mysql: $conn, query: $sql) or
        die(mysqli_error(mysql: $conn));

        if($query){
            echo "<center>";
            echo "Cadastro realizado com sucesso. <br>";
            echo "<a href= 'index.html'><button title = 'Voltar ao início'>Voltar</button></a>";
            echo "</center>";
        } 
        else{
            echo "<center>";
            echo "Erro ao realizar o cadastro. <br>";
            echo "<a href= 'index.html'> <button title = 'Voltar ao início'>Voltar</button></a>";
            echo "</center>";
        }
    ?>
</body>
</html>

