<?php
    $artista = $_POST['artista'];
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];
    $tipo = $_POST['tipo'];
    $capa = $_POST['capa'];

    echo "$artista - $nome - $ano - $tipo - $capa";


    $conexao = mysqli_connect("localhost", "root", "", "db_spotify");
    if ($conexao) {
        die("<h3>ERRO</h3>" . mysqli_connect_error());
    }

    $sql = "INSERT INTO tb_albuns(artista, nome, ano, tipo, capa) VALUES ('$artista', '$nome', '$ano', '$tipo', '$capa')";

    $resultado = mysqli_query($conexao , $sql);

    if ($resultado) {
        echo "<h3>Cadastrado com sucesso!</h3>";
    } else {
        echo "<h3>Ferro foi tudo</h3>";
    }

    mysqli_close($conexao);
?>