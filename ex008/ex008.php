<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Cálculo da média final de um aluno SGA</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1>Cálculo da média final de um aluno SGA</h1>
    
    <?php
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $n1 = $_POST['nota1'];
            $n2 = $_POST['nota2'];
            $n3 = $_POST['nota3'];

            //((A1*2)+(A2*2)+(A3*1))/5
            $media = (($n1*2) + ($n2*2) + ($n3*1)) / 5;

            if ($media >= 7) {
                echo "<p>Aprovado</p>";
            } else {
                echo "<p>Reprovado</p>";
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