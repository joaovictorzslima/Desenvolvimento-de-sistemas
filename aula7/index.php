<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - HOME</title>
</head>
<body>

<h1>Aula 07 - HOME</h1>

<h2>
    Boletim de Matemática</h2>

    <h3>Informe o nome do aluno e suas 4 notas do bimestre</h3>
    <form action="media.php" method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome"><br>

    <label for="bim1"> 1° Bimestre</label>
    <input type="number" name="bim1" id="bim1" step="0.1"><br>
    
    <label for="bim2"> 2° Bimestre</label>
    <input type="number" name="bim2" id="bim2" step="0.1"><br>

    <label for="bim3"> 3° Bimestre</label>
    <input type="number" name="bim3" id="bim3" step="0.1"><br>

    <label for="bim4"> 4° Bimestre</label>
    <input type="number" name="bim4" id="bim4">

    <button type="submit">Calcular</button>

    </form>
    
</body>
</html>