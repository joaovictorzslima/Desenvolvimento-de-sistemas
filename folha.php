<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - Folha de Pagamento</title>
</head>
<body> 
    <h1>Aula 03 - Folha de Pagamento</h1>
<?php
    // SE ESSA PAGINA PAGINA RECEBEU UMA REQUISIÇÃO POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $funcionario = $_POST['funcionario'];
        $horas_trab = $_POST['horas_trab'];
        $valor_hora = $_POST['valor_hora'];
        
        //salario bruto
        $sal_bruto = $horas_trab * $valor_hora;

        //IR
        if ($sal_bruto <= 1372.81){
            $ir = 0;

        }else if ($sal_bruto <= 2743.25){
            $ir = $sal_bruto * 0.15;

        } else{
            $ir = $sal_bruto * 0.275;
        }
   
        //INSS
        if ($sal_bruto <= 868.29){
            $inss = $sal_bruto * 0.08;
        
        } else if($sal_bruto <= 1447.14){
            $inss = $sal_bruto * 0.09;
       
        }else if($sal_bruto <= 2894.27){
            $inss = $sal_bruto * 0.11;
       
        } else{
            $inss = 318.37;
        }
        
        //FGTS
        $fgts = $sal_bruto * 0.08;

        //SALARIO LIQUIRO
        $sal_liquido = $sal_bruto - $ir - $inss; 

        // EXIBIR DADOS NA TELA
        echo "<h3> Calculos da Folha </h3>";

        echo "Funcionario: " . $funcionario . "<br>";

        echo "Horas trabalhadas: " . $horas_trab . "h<br>";

        echo "Valor da hora: R$ " . $valor_hora . "<br>";

        echo "Salrio bruto: R$ " . $sal_bruto . "<br>";

        echo "IR: R$ " . $ir . "<br>";

        echo "INSS: R$ " . $inss . "<br";

        echo "FGTS: R$ " . $fgts . "<br>";

        echo "<strong> Salário Liquido: R$ " . $sal_liquido . "</strong>";


    }else{

        echo "<h3> Por favor, preencha todos os campos para efetuar o cálculo </h3>";
    
    }

    ?>

</body>
</html>