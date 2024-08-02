<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
    <?php


        // UMA ARRAY É NADA MAIS QUE UMA LISTA ORDENADA POR UM ÍNDICE, QUE CONTÉM DADOS DE DIVERSOS TIPOS(BOOLEANO, INT, FLOAT, STRING...) E QUE ESTÁ DENTRO DE UMA ÚNICA VARIÁVEL



        echo "<h1>Array - Vetores</h1>";
        $carros = array('Fiesta','Palio','Corsa','Siena'); //Arrays iniciam seus índices sempre na posição 0 
        echo $carros[1], "<br>"; // Impressão dos valores ordenados com quebra de linha
        echo $carros[3], "<br>";

        // Adicionando novos elementos
        $carros[4] = "Clio";
        $carros[11] = "Versa"; // Aqui o elemnto "Versa" foi adicionado no índice 11, ou seja, os índices 5,6,7,8,9 e 10 não possuem elementos, resultando em erros no momento da impressão.
        $carros[] = "Sandero"; // Esta é a melhor forma de adicionar um novo elemento na array pois, desta maneira, ele sempre ocupará a última posição do índice.

        echo $carros[4], "<br>"; // Resultado Clio
        echo $carros[5], "<br>"; // SEM RESULTADO
        echo $carros[11], "<br>"; // Resultado Versa 
        echo $carros[12], "<br>"; // Resultado Sandero. *OBS* : Como "Versa" ocupa a posição 11, "Sandero" automaticamente ocupa a posição 12.



        // I,PRESSÃO DE ARRAYS

        echo "<h1>Impressão de array completa</h1>";

        echo "<pre>"; // O "<pre>" é usado para formatar a saída e torná-la mais legível.
        print_r($carros); // A função "print_r()" imprime a array de forma mais formatada e legível.
        echo "</pre>";

        echo "<pre>";
        var_dump($carros); // A função var_dump() imprime mais informações sobre a array, incluindo o tipo de dados e o tamanho da array.
        echo "</pre>";

    ?>
</body>
</html>