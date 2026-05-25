<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Discografia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <main class="container d-flex align-items-center justify-content-center py-5">
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
                    <label for="capa" class="form-label">Capa do album:</label>
                    <input type="text" class="form-control" id="capa" name="capa" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </form>
        </section>
    </main>

    <footer class="text-light text-center py-3">
        <p class="mb-2">"Yoruichi" - Iori Lima - iorilima13@gmail.com</p>

        <div class="social-links">
            <a href="#" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708C16 15.487 15.474 16 14.825 16H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zM3.743 5.182c.837 0 1.358-.554 1.358-1.248-.015-.709-.521-1.248-1.342-1.248-.822 0-1.359.539-1.359 1.248 0 .694.522 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
            </a>

            <a href="#" aria-label="GitHub">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82A7.55 7.55 0 0 1 8 3.87c.68 0 1.36.09 2 .26 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg>
            </a>
        </div>
    </footer>
</body>
</html>
