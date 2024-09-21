<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificação de número par ou ímpar</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Verificação de número par ou ímpar</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $num = $_POST['numero'];

            if ($num % 2 == 0) {
                echo "<p>O número $num é par!<br></p>";
            } else {
                echo "<p>O número $num é impar!<br></p>";
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