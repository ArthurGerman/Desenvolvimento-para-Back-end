<?php 
    include "../leitor/config.php";

   if(!$conn){
    die("Falha na conexão" . mysqli_connect_error());
   } 

   $titulo = "$_POST[titulo]";
   $autor = "$_POST[autor]";
   $editora = "$_POST[editora]";
   $ano_publicacao = "$_POST[ano_publicacao]";
   $genero = "$_POST[genero]";

   $sql = "INSERT INTO livro (titulo, autor, editora, ano_publicacao, genero)
            VALUES(
                '$titulo',
                '$autor',
                '$editora',
                '$ano_publicacao',
                '$genero'
            )";

    $query = mysqli_query(mysql: $conn, query: $sql) or
    die(mysqli_error(mysql: $conn));

    if($query){
        echo "Livro cadastrado";
        echo "<a href='index.html'><button>Voltar</button></a>";
    }
    else{
        echo "Erro de cadastramento";
    }
?>