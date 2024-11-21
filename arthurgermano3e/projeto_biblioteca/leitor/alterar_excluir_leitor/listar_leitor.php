<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Lista de leitores cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div id="form">
        <form action="form_altera_leitor.php" method="post">

            <div style="display: flex;
                        justify-content:center;
                        margin-top: 30px;
                    ">
                <?php
                    include "config.php";
                    $sql = "SELECT * FROM leitor";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($linha = mysqli_fetch_assoc($result)) {
                            echo $linha['id_leitor']. " - ". $linha['nome']. "<br>";
                        }
                    } else {
                        echo "0 resultados";
                    }
                ?>
            </div>

            <table >
                <tr>
                    <td>Código:</td>
                    <td>
                        <input type="text" name="id_leitor" size="3"
                            title="Digite código do contato" required onchange="this.value = this.value.trim()"> &nbsp;
                        <button type="submit" name="alterar_contato">
                            Alterar contato
                        </button>
                    
                        <button type="button" style="margin-left: 0px;">
                            <a href="/arthurgermano3e/projeto_biblioteca/index.html">Home</a>
                        </button>
                    </td>
                </tr>
            </table>

        </form>
    </div>
</body>
</html>