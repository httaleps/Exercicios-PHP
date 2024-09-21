<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $criterio = $conn->real_escape_string($_POST['criterio']);

    $sql = "SELECT nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria FROM alunos WHERE nome LIKE '%$criterio%' OR matricula LIKE '%$criterio%' OR email LIKE '%$criterio%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Resultados da Busca: </h2>";
        echo "<table border='1'>
            <tr>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Curso</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Curso para Horas Complementares</th>
                <th>Carga Horária</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['nome']}</td>
                <td>{$row['matricula']}</td>
                <td>{$row['curso']}</td>
                <td>{$row['email']}</td>
                <td>{$row['telefone']}</td>
                <td>{$row['endereco']}</td>
                <td>{$row['cep']}</td>
                <td>{$row['cidade']}</td>
                <td>{$row['uf']}</td>
                <td>{$row['curso_horas']}</td>
                <td>{$row['carga_horaria']}</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}

$conn->close();
?>


    
</body>
</html>