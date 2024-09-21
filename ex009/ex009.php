<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Cálculo da média final de um aluno SGA</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
<h1>Verificação de maioridade</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            if ($idade >= 18) { //maior de idade
                echo "<p>$nome é maior de 18 e tem $idade anos</p>";
            } else { //menor de idade
                echo "<p>$nome não é maior de 18 e tem $idade anos</p>";
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