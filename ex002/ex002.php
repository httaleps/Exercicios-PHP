<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Tabuada de um Número</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Tabuada de um Número</h1>
    
    <?php

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        echo "Tabuada do $numero<br>";

            for ($num = 0; $num <= 10; $num++) { //loop primeiro elemento
                $calc = $numero * $num;
                echo "$numero X $num = $calc <br>";
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
