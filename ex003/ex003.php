<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Cáculo do Fatorial com Recursão</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Cáculo do Fatorial com Recursão</h1>
    
    <?php

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        function calcularFatorial($numero) {
            if ($numero <= 1) {
                return 1; // caso base: fatorial de 0 e 1 é 1
            } else {
                //chamada recursiva: fatorial de n é n multiplicado pelo fatorial de n-1
                return $numero * calcularFatorial($numero - 1);
            }
        }
        
            $resultado = calcularFatorial($numero);
            echo "O fatorial de $numero! é: <br>"; // saída
        
            for ($numero; $numero >= 1; $numero--) {
                echo "$numero ";
            }
            echo "= $resultado <br>";
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
