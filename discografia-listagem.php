<?php
$titulo_da_pagina = "Listagem de Discografias";
include 'inc-cabeca.php';
?>

<body class="bobDisco">
    <main class="container">
        <?php include 'inc-menu.php'; ?>
        <h1 class="text-center my-5">Listagem de Discografias</h1>
        <div class="row">
            <div class="col">
                <a href="discografia-formulario.php" class="btn btn-success mb-3">Nova discografia</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-dark table-striped table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Artista</th>
                            <th>Nome do album</th>
                            <th>Ano de lancamento</th>
                            <th>Tipo</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'inc-conexao.php';

                        $sql = "SELECT id, artista, nome, ano, tipo, foto FROM tb_discografia ORDER BY artista, ano";
                        $resultado = mysqli_query($conexao, $sql);

                        if (!$resultado) {
                            echo '<tr><td colspan="6" class="text-danger">Erro ao buscar discografias: ' . mysqli_error($conexao) . '</td></tr>';
                        } elseif (mysqli_num_rows($resultado) === 0) {
                            echo '<tr><td colspan="6" class="text-center">Nenhuma discografia cadastrada.</td></tr>';
                        } else {
                            while ($linha_resultado = mysqli_fetch_assoc($resultado)) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($linha_resultado['id']) . '</td>';
                                echo '<td>' . htmlspecialchars($linha_resultado['artista']) . '</td>';
                                echo '<td>' . htmlspecialchars($linha_resultado['nome']) . '</td>';
                                echo '<td>' . htmlspecialchars($linha_resultado['ano']) . '</td>';
                                echo '<td>' . htmlspecialchars($linha_resultado['tipo']) . '</td>';
                                echo '<td><img src="' . htmlspecialchars($linha_resultado['foto']) . '" alt="Foto do album" class="album-thumb"></td>';
                                echo '</tr>';
                            }
                        }
                        mysqli_close($conexao);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php include 'inc-rodape.php'; ?>
