<?php
    $conexao = mysqli_connect("localhost", "root", "", "db_spotify");

    if (!$conexao) {
        die("<h3>Erro ao conectar com o banco de dados</h3>" . mysqli_connect_error());
    }

    mysqli_set_charset($conexao, "utf8");
?>
