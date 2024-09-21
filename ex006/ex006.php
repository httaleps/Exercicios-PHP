<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Impressão de valores em ordem crescente</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Impressão de valores em ordem crescente</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if ($num1 > $num2) {
                echo "<p>$num2, $num1</p>";
            } else {
                echo "<p>$num1, $num2</p>";
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