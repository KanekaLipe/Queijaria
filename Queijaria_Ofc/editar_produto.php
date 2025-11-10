<?php
include "conexao.php";

if (!isset($_GET['id'])) {
    die("ID do produto não fornecido.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM produtos_tb WHERE id = $id";
$resultado = $conexao->query($sql);

if ($resultado->num_rows == 0) {
    die("Produto não encontrado.");
}

$produto = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #fff0e1;">

<nav class="navbar navbar-expand-lg" style="background-color: #b50000;">
    <?php include 'menu.html'; ?>
</nav>

<div class="container d-flex justify-content-center" style="padding-top: 80px; padding-bottom: 80px;">
    <form method="POST" action="atualizar_produto.php" class="border p-4 shadow rounded-5 bg-light" style="width: 750px;">
        <h2 class="text-center mb-4">Atualizar Produto</h2>
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $produto['nome']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control" value="<?php echo $produto['categoria']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Validade</label>
                <input type="date" name="validade" class="form-control" value="<?php echo $produto['validade']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" name="preco" class="form-control" step="0.01" value="<?php echo $produto['preco']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade em Estoque</label>
                <input type="number" name="quantidade_estoque" class="form-control" value="<?php echo $produto['quantidade_estoque']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade Mínima</label>
                <input type="number" name="qtd_minima" class="form-control" value="<?php echo $produto['qtd_minima']; ?>" required>
            </div>

            <button type="submit" class="btn btn-danger w-100">Salvar Alterações</button>
        </form>
    </div>
</div>

</body>
</html>
