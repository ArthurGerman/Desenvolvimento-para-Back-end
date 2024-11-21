<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de cadastro de usuário</title>
</head>
<body>
    <?php
    // Conexão com o banco de dados
    include "./config.php";
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: {$conn->connect_error}");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_leitor = $_POST['id_leitor'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];

        $sql = "UPDATE leitor SET 
                    nome='$nome', 
                    CPF='$cpf',
                    sexo='$sexo',
                    telefone='$telefone', 
                    email='$email',
                    rua='$rua',
                    cidade='$cidade' 
                WHERE id_leitor='$id_leitor'";
        
        $resultado = mysqli_query($conn, $sql);


        if ($resultado) {
            echo "Cadastro atualizado com sucesso.";
        } else {
            echo "Erro ao atualizar cadastro: " . mysqli_error($conn); // Corrigido para exibir a mensagem de erro correta
        }

    }
    $conn->close();
    ?>
</body>
</html>