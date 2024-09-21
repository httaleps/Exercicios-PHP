<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include_once("conexao.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //obter os dados do formulario
            $matricula = $_POST['matricula'];
            $nova_carga = $_POST['nova_carga'];

            //verifique se a matricula foi informada
            if (!empty($matricula) && !empty($nova_carga)) {
                //verifique se o aluno existe no banco de dados
                $sql = "SELECT carga_horaria FROM alunos WHERE matricula = ?";
                $stmt = $conexao->prepare($sql);
                $stmt->bind_param("s", $matricula); //bind no parametro de matricula
                $stmt->execute();
                $stmt->store_result();

                //verificar se o aluno foi encontrado
                if ($stmt->num_rows > 0) {
                    //obter a carga horaria atual
                    $stmt->bind_result($carga_atual);
                    $stmt->fetch();

                    //somar a nova carga horaria
                    $nova_carga_total = $carga_atual = $nova_carga;

                    //atualizar a carga horaria no banco de dados
                    $sql_update = "UPDATE alunos SET carga_horaria = ? WHERE matricula = ?";
                    $stmt_update = $conexao->prepare($sql_update);
                    $stmt_update->bind_param("is", $nova_carga_total, $matricula);

                    if ($stmt_update->execute()) {
                        echo "Carga horária atualizada com sucesso!";
                    } else {
                        echo "Erro ao atualizar a carga horária: " . $conexao->error;
                    }

                    $stmt_update->close();

                } else {
                    echo "Matrícula não encontrada.";
                }

                $stmt->close();
            } else {
                echo "Por favor, preencha todos os campos.";
            }
        }

        $conexao->close();
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

