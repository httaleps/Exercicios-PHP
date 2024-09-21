<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conn = mysqli_connect($servidor, $usuario, $senha, $database);

    if($conn->connect_error) {
        die ("Conexão falhou: " . $conn->connect_error);
    }
?>