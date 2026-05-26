<?php
include 'inc-conexao.php';

$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

$sql = "INSERT INTO tb_discografia (artista, nome, ano, tipo, foto) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conexao, $sql);

if (!$stmt) {
    die("<h3>Erro ao preparar o cadastro</h3>" . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "ssiss", $artista, $nome, $ano, $tipo, $foto);
$resultado = mysqli_stmt_execute($stmt);
$erro = mysqli_stmt_error($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conexao);

if ($resultado) {
    header("Location: discografia-listagem.php");
    exit;
}

echo "<h3>Erro ao cadastrar discografia.</h3>";
echo "<p>" . htmlspecialchars($erro) . "</p>";
?>
