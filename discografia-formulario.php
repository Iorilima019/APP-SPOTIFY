<?php
    $titulo_da_pagina = "Cadastro de Discografia";
    include 'inc-cabeca.php';
?>

<body class="bobDisco">
     <?php include 'inc-menu.php'; ?>
    <main class="container d-flex flex-column align-items-center pb-5">

        <section class="form-box">
            <h1 class="h3 mb-4 text-success">Cadastro de Discografia</h1>

            <form action="discografia-salvar.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="artista" class="form-label">Artista:</label>
                    <input type="text" class="form-control" id="artista" name="artista" required>
                </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do album:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="mb-3">
                    <label for="ano" class="form-label">Ano de lancamento:</label>
                    <input type="number" class="form-control" id="ano" name="ano" required>
                </div>

                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo:</label>
                    <select class="form-control" id="tipo" name="tipo" required>
                        <option value="album">Álbum</option>
                        <option value="single">Single</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="foto" class="form-label">Foto do album:</label>
                    <input type="text" class="form-control" id="foto" name="foto" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </form>
        </section>
    </main>
  <?php include 'inc-rodape.php'; ?>
