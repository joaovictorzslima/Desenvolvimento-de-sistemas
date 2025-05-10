<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 - Clientes Cadastrados</title>
</head>
<body>
    
    <h1>Aula 08 - Clientes Cadastrados</h1>

    <p>
        <a href="index.php">Voltar para Home</a>
    </p>

    <?php

    //incluir arquivo de conexao
    require_once 'conexao.php';

    //estabelecer conexão com bd
    $conn = conectar_banco();

    //criar a nossa consulta (query)
    $query = "SELECT * FROM tb_clientes";

    $resultado = mysqli_query($conn, $query);

    $linhas_afetadas = mysqli_affected_rows($conn);

    //verificar se não ha registro na tabela
    if ($linhas_afetadas == 0){
        exit("<h3>Não há clientes cadastrados</h3>");
    }

    //verificar se há algum problema com a consulta (querry)
    if($linhas_afetadas < 0){
        exit("<h3>Erro ao exibir clientes cadastrados. Verifique estrutura da consulta</h3>");
    }

    // enquanto houver registros armazenados dentro de 'resultados'
    // (registro = linha da tabela = cliente)
    // transforme o registro que esta sendo acessado na iteração atual
    // do laço em um array associativo chamado 'cliente'
    echo "<h2>Clientes Cadastrados</h2>";
    while($cliente = mysqli_fetch_assoc($resultado)){

        // mostrar os dados do array associativo na iteração atual:
        echo "ID #:" . $cliente['id'] . "<br>";
        echo "Nome:" . $cliente['nome'] . "<br>";
        echo "Fone:" . $cliente['fone'] . "<br>";
        echo "Email:" . $cliente['email'] . "<br><br>";

    }

    mysqli_close($conn);

    ?>

</body>
</html>