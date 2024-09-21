<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Comparação de valores A e B</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Comparação de valores A e B</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $a = $_POST['num1'];
            $b = $_POST['num2'];

            if ($a > $b){
                echo "<p>Valor A ($a) maior que valor B ($b).</p>";
            } elseif ($a < $b) {
                echo "<p>Valor A ($a) menor que valor B ($b).</p>";
            } else {
                echo "<p>Os valores A ($a) e B ($b) são iguais.</p>";
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