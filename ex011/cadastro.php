<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <?php
        //faz a conexao com o banco de dados, ao rodar o script de acesso ao BD
        include ("conexao.php");

        //criar as variaveis que virao do form html
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $curso_horas = $_POST['curso_horas'];
        $carga_horaria = $_POST['carga_horaria'];

        //gravar os dados do form do html no BD
        $sql = "INSERT INTO alunos(nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
                VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', '$carga_horaria')";

            if(mysqli_query($conexao, $sql)) {
                echo "Usuário cadastrado com sucesso.";
            } else {
                echo "Erro".mysqli_connect_error($conexao);
            }
            mysqli_close($conexao);

        
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