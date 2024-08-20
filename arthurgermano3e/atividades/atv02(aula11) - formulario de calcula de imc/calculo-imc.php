<?php 
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura*$altura);



    if($imc < 18.5){
        $classificacao = "Abaixo do peso";
    }
    elseif($imc >= 18.5 && $imc < 24.9){
        $classificacao = "Peso normal";
    }
    elseif($imc >= 25 && $imo < 29.9){
        $classificacao = "Sobrepeso";
    }
    else{
        $classificacao = "Obesidade";
    }


    header("location: index.php?imc=$imc&peso=$peso&altura=$altura&classificacao=$classificacao");


?>