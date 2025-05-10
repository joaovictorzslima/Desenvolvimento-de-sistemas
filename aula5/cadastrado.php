<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Produtos cadastrados</title>
</head>
<body>
    
    <h1>Aula 05 - Produtos cadastrados</h1>

    <p>
        <a href="index.php">Voltar á Homa</a>
    </p>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if( empty($_POST['produto']) ||
            empty($_POST["valor"]) ||
            empty($_POST['quantidade']) ){

                //MENSAGEM DE ERRO
            echo"<h3> Preencha todos os campos </h3>";  
                //INCLUIR NOVAMENTE O FORMULARIO
            require_once ('form_cadastro.php');

        }else{

        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];

        echo"<h2> Dados do Produto: <h2>";
        echo"<h2> Produto: " . $produto . "<br>"; 
        echo"<h2> Valor: " . $valor . "<br>";
        echo"Quantidade em estoque: " . $quantidade;

    }
    }

    ?>

</body>
</html>