<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 - Cadastrar Cliente</title>
</head>
<body>
    
    <h1>Aula 08 - Cadastrar Cliente</h1>

    <p>
        <a href="index.php">Voltar para Home</a>
    </p>

    <?php
    // incluir arquivo de validações:
    require_once 'validacoes.php';

    if(form_nao_enviado()){
        exit("<h3> Formulário não enviado. Por favor, retorne à Home </h3>");
    }

    if(ha_campos_em_branco($_POST)){
        exit("<h3> Por favor, preencha todos os campos do form de cadastro </h3>");
    }
    
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    // incluir arquivo de conexão
    require_once 'conexao.php';

    //estabelecer uma conexão o BD
    $conn = conectar_banco();

    //criar nosso comando SQL (INSERT)
    $sql = "INSERT INTO tb_clientes (nome, fone, email) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    //verificar se houve erro no preparo deste stmt
    if(!$stmt){
        exit ("<h3> Erro na preparação da consulta </h3>");
    }

    // se estiver tudo certo com a declaração, faremos o bind
    // (associação) doas valores ao stmt
    mysqli_stmt_bind_param($stmt, "sss", $nome, $fone, $email);

    //abaixo, executamos o comando preparado e, caso haja algum erro,
    //exibimos msg de erro e finalizamos a execução do script
    if(!mysqli_stmt_execute($stmt)){
        exit("<h3> Erro ao cadastrar. Verifique o erro e tente novamente: " . mysqli_stmt_error($stmt) . "<h3>");
    }

    echo "<h3> Cliente cadastrado com sucesso </h3>";

    mysqli_stmt_close($stmt); // encerra o script
    mysqli_close($conn); //

    ?>

</body>
</html>