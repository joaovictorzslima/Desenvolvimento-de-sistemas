<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - HOME</title>
</head>
<body>
    <h1>Aula 05 - HOME</h1>

    <h2>Cadastro Folha de Pagamentos</h2>

    <form action="folha.php" method="post">
        <p>
        <input type="text" name="funcionario" 
        placeholder="Nome do funcionario" required>
        </p>
        
        <p>
        <input type="number" name="horas_trab" 
        placeholder="Horas trabalhadas" required min="1">
        </p>
        
        <p>    
        <input type="number" name="valor_hora" 
        placeholder="Valor da hora R$" required min="20" step="0.1">
        </p>

        <p>
            <button type="submit">Calcular</button>
        </p>
    </form>
</body>
</html>