<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calculadora com switch</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Calculadora com switch</h1>
    
    <?php

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $op = $_POST['operacao'];

            switch ($op) {
                case 'Soma':
                    $resultado = $num1 + $num2;
                    echo "<p>A soma entre $num1 e $num2 é $resultado</p>";
                    break;

                case 'Subtração':
                    $resultado = $num1 - $num2;
                    echo "<p>A subtração entre $num1 e $num2 é $resultado</p>";
                    break;

                case 'Multiplicação':
                    $resultado = $num1 * $num2;
                    echo "<p>A multiplicação entre $num1 e $num2 é $resultado</p>";
                    break;

                case 'Divisão':
                    $resultado = $num1 / $num2;
                    echo "<p>A divisão entre $num1 e $num2 é $resultado</p>";
                    break;
                    
                default:
                    echo "Sem resultado";
            }
        } 
    ?>

    <br>
    <a href="../index.html">Voltar para a página inical</a>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        echo "<p>";
        echo "Informações do browser (User agente):" . $_SERVER
        ['HTTP_USER_AGENT'];
    ?>
</body>
</html>
