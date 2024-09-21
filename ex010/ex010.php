<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Identificação do mês correspondente a um número</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Identificação do mês correspondente a um número</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numMes = $_POST['num'];

            $meses = [
                1 => 'Janeiro',
                2 => 'Fevereiro',
                3 => 'Março',
                4 => 'Abril',
                5 => 'Maio',
                6 => 'Junho',
                7 => 'Julho',
                8 => 'Agosto',
                9 => 'Setembro',
                10 => 'Outubro',
                11 => 'Novembro',
                12 => 'Dezembro',
            ];

            if (isset($meses[$numMes])) {
                echo "<p>{$meses[$numMes]}</p>";
            } else {
                echo "<p>Mês inválido</p>";
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