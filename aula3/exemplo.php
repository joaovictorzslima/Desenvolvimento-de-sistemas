<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>

<p><a href="index.php"></a>Home</p>

<h1>Exemplos</h1>

<p>
    Informe um valor entre 1 e 100 para que o sistema verifique se é par ou impar:
</p>

<form action="exemplo.php" method="post">
        <label for="valor">valor</label>
        <input type="number" name="valor" id="valor"
        min="1" max = "100">

        <button type="submit">Verificar</button>

</form>
    <?php
        //receber o dado do campo "valor" enviado via
        // "post" pelo form acima

        $valor = $_POST['valor'];

        //verificar se 'valor' é par ou impar
        if ($valor % 2 == 0) {
            echo "<h3>" . $valor . "é par"
        }
    ?>
</body>
</html>