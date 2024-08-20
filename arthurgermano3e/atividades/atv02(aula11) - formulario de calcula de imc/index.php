<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - Formulário de cálculo do IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script>
        function formatarAltura(input) {
            var valor = input.value;
            var regex = /^\d{1}$/;
            if (regex.test(valor)) {
                input.value = valor + '.';
            }
        }
    </script>

    <h1>Formulário de cálculo de IMC</h1><br>

    <p>Este formulário tem o intuito de calcular o índice de Massa Corporal (IMC) através da sua altura e do seu peso. O IMC é uma excelente escala que indica o seu nível de massa corpórea, servindo também como um indicativo de saúde.</p>

    <form action="calculo-imc.php" method="post">
      
        
        <table>
            <tr>
                <td><label for="peso">Digite seu peso em quilogramas: </label></td>
                <td><input type="text" name="peso" maxlength="2" value="<?php echo (isset($_GET["peso"])?$_GET["peso"]:"");?>"><br></td>
            </tr>
 
            <tr>
                <td><label for="altura">Digite sua altura: </label></td>
                <td><input type="text" name="altura" oninput="formatarAltura(this)" maxlength="4" value="<?php echo (isset($_GET["altura"])?$_GET["altura"]:"");?>"><br></td>
            </tr>
            
            <tr>
                <td>Seu IMC é:</td>
                <td><input type="text" value="<?php echo (isset($_GET["imc"])?number_format($_GET["imc"], 2):"");?>"></td>
            </tr>
            <tr>
                <td>Sua classificação:</td>
                <td><input type="text" value="<?php echo (isset($_GET["classificacao"])?$_GET["classificacao"]:"");?>"></td>
            </tr>

            <tr>
                <td colspan="2" align="right"><input type="submit" value="Calcular IMC"><br></td>
            </tr>

        </table>

    </form>
</body>
</html>