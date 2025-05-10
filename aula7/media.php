<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 - Média Anual</title>
</head>
<body>

<h1>Aula 7 - Média Anual</h1>
<p>
    <a href="index.php">HOME</a>
</p>

<?php 

if(!validar_envio_form()){

    echo "<h3> Por Favor, Preencha o form na home</h3>";
    exit();
}

$dados = $_POST;

if (dados_em_branco($dados)){

    echo "<h3> Todos os campos do form deve ser feitos!</h3>";
}
?>
    
</body>
</html>