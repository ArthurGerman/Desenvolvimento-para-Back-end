<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - PHP</title>

    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Aprendendo PHP</h1>

    <?php
        // Este é um comentário de uma única linha
        # Esta é uma outra forma de comentar uma única linha

        /* Aqui é um bloco de comentário
            que pode ser de várias linhas
        */

        echo "Através do comando 'echo', nós conseguimos que apareça um texto na tela do usuário.";
 
        // Podemos colocar tags HTML dentro do PHP
        echo "<h1>Este é título HTML</h1>";
        echo "<p>Parágrafo do texto.</p>";

        //Comandos de saída de dados:
        //echo - Imprime dados na tela
        //print - Imprime dados na tela

        print "<p>Texto dentro do print</p>"; // Print em PHP


        /* Variáveis em PHP
            1. As variáveis no PHP sempre iniciam com $ seguido do nome da variável;
            2. Não é necessário identificar o tipo do dado da variável;
            3. Para criar uma variável basta atribuir um valor a ela;
        */

        $nome = "Arthur";
        $idade = 17;
        $altura = 1.75;
        echo "$nome tem $idade anos de idade e possui $altura metros de altura"; 

        // Aritmética básica

        echo "Operadores Aritméticos.<br>";
        echo "a=10 e b=5<br>";

        $a = 10;
        $b = 5;

        $c = $a + $b; // Soma
        echo "A soma de $a + $b é $c<br>";

        $c = $a - $b; // Subtração
        echo "A subtração de $a - $b é $c<br>";

        $c = $a * $b; // Multiplicação
        echo "A multiplicação de $a * $b é $c<br>";

        $c = $a / $b; // Divisão
        echo "A divisão de $a / $b é $c<br>";

        $c = $a % $b; // Resto da divisão
        echo "O resto da divisão de $a / $b é $c<br>";

        $c = $a ** $b; // Potenciação
        echo "A potência de $a ** $b é $c<br>";
    ?>
</body>
</html>