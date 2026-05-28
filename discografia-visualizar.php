<?php
$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabeca.php";
include "inc-conexao.php";

$id = $_GET['id'];

$sql = "select * from tb_discografia where id = $id";
$resultado = mysqli_query($conexao, $sql);
$foto = $arrtista = $nome = $ano = $tipo = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $foto = $linha['foto'];
    $artista = $linha['artista'];
    $nome = $linha['nome'];
    $ano = $linha['ano'];
    $tipo = $linha['tipo'];
}
?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container txt-album">
        <h1 class="text-center my-5">Visualizar Discografia</h1>
        <div class="text-center">
        <br> <img src="<?=$foto; ?>" alt="<?=$nome; ?>" class="img-album"> <br>
       <span class="corSist"> Artista: </span> <?=$artista; ?> <br>
        Nome do álbum: <?=$nome; ?> <br>
        Ano de lançamento: <?=$ano; ?> <br>
        Tipo: <?=$tipo; ?> <br>
        </div>
    </main>
<?php
mysqli_close($conexao);
include "inc-rodape.php";
?>