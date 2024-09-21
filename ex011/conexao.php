<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdname = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bdname);
    if(!$conexao){
        die ("Houve um erro: ".mysqli_connect_error());
    }
?>