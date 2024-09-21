<?php
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $criterio = $conn->real_escape_string($_POST['criterio']);

    $sql = "DELETE FROM alunos WHERE nome = '$criterio' OR matricula = '$criterio' OR email = '$criterio'";

    if($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Registro excluído com sucesso.";
        } else {
            echo "Nenhum registro encontrado para excluir.";
        }
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }
}

$conn->close();
?>