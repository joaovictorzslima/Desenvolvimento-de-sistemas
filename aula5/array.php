<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - ARRAYS</title>
</head>
<body>
    
    <h1>Aula 05 - Exmplo ARRAYS</h1>

    <p>
        <a href="index.php">Voltar à Home</a>
    </p>

    <?php

        // DECLARAÇÃO DOS ARRAYS

        //UTILIZANDO A FUNÇÃO "ARRAYS"
        $frutas = array("Laranja", "Maçã", "Pera");
        //  INDICES :       0         1       2

        //UTILIZANDO COLCHETES
        $cidades = [
                        "Curitiba",             //0
                        "São Paulo",            //1
                        "Rio de Janeiro",       //2
                        "Porto Alegre"          //3
                    ];

        //UTILIZANDO TRAÇOS DE REPETIÇÕ0ES PARA CRIAR UM ARRAY DINAMICAMENTE
        for($i = 18; $i <= 30; $i++);{

            $idades[] = $i;

        }


        // ARRAY ASSOCIATIVO
        $cliente = [
                        'nome' => 'João Victor',
                        'email' => 'joaovictoo2@Outlook.com',
                        'fone' => '41999999999'
                    ];    

        echo "<h2>Mostrando dados do array 'frutas'</h2>";
        echo $frutas[0] . "," . $frutas[1] . "," . $frutas[2] . "<br>";

        echo "<h2> array 'cidades' com o laço FOR </h2>";

        for($i = 0; $i < count($cidades); $i++){
            //COUNT RETORNA O TAMANHO DO ARRAY
            echo $cidades[$i] . "<br>";
        }


        echo "<h2> Mostrando array 'idades' com o laço 'foreach' simples </h2>";

        foreach($idades as $idades_atual){
            echo $idades_atual . "<br>";
        }

        echo"<h2> Mostrando array associativo 'cliente' com o laço 'foreach' completo </h2>";

        foreach($cliente as $chave => $valor){
            

            echo ucfirst($chave) . " = " . $valor . "<br>";
        }
    ?>


</body>
</html>