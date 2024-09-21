<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Verificação de Número Positivo, Negativo ou Zero</h1>
    
    <?php 
       if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero > 0) {
            echo "<p>Valor positivo.</p>";
        }elseif ($numero < 0) {
            echo "<p>Valor negativo.</p>";
        } else {
            echo "<p>Igual a zero.</p>";
        }    
    } 
    ?>

    <a href="../index.html">Voltar para a página inical</a>

    <footer>
        <?php
            echo "<p>";
            setlocale(LC_ALL, 'pt_BR.utf8');
            echo strftime('%d/%B/%G');
        
            echo "<p>";
            echo "Informações do browser (User agente):" . $_SERVER
            ['HTTP_USER_AGENT'];
        ?>
    </footer>
</body>
</html>
