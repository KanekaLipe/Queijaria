<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #fff0e1;">

    <nav class="navbar navbar-expand-lg" style="background-color: #b50000;">
        <?php include 'menu.html'; ?>
    </nav>

    <div class="container d-flex justify-content-center" style="padding-top: 80px; padding-bottom: 80px;">
        <form method="POST" action="valida_produto.php" class="border p-4 shadow rounded-5 bg-light" style="width: 750px;">
            <h2 class="text-center mb-4">Cadastro de Produto</h2>

            <div class="mb-3">
                <label for="txtNomeProduto" class="form-label">Nome do Produto</label>
                <input type="text" name="txtNomeProduto" class="form-control" id="txtNomeProduto" required>
            </div>

            <div class="mb-3">
                <label for="txtCategoria" class="form-label">Categoria</label>
                <input type="text" name="txtCategoria" class="form-control" id="txtCategoria" required>
            </div>

            <div class="mb-3">
                <label for="txtValidade" class="form-label">Validade</label>
                <input type="date" name="txtValidade" class="form-control" id="txtValidade" required>
            </div>

            <div class="mb-3">
                <label for="txtPreco" class="form-label">Preço do Produto</label>
                <input type="number" name="txtPreco" class="form-control" id="txtPreco" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="txtQtdMinima" class="form-label">Quantidade Mínima</label>
                <input type="number" name="txtQtdMinima" class="form-control" id="txtQtdMinima" required>
            </div>

            <div class="mb-3">
                <label for="txtQtdEstoque" class="form-label">Quantidade em Estoque</label>
                <input type="number" name="txtQtdEstoque" class="form-control" id="txtQtdEstoque" required>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault1">
                <label class="form-check-label mt-2" for="checkDefault1">
                    Você deseja receber notificação de vencimento dos produtos? Ao ativar essa opção, o sistema enviará alertas sempre que
                    houver itens próximos da data de vencimento.
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault2">
                <label class="form-check-label mt-2" for="checkDefault2">
                    O sistema vai alertar quando a quantidade de um produto estiver baixa. Você receberá uma notificação com o nome do produto,
                    a quantidade atual e o mínimo cadastrado.
                </label>
            </div>

            <button type="submit" class="btn w-50 d-block mx-auto mt-4" style="background-color: #d40000; color: white;">Cadastrar Produto</button>

            <?php
            if (isset($_GET['erro'])) {
                echo "<p class='alert alert-danger text-center mt-3'>Erro ao cadastrar produto. Verifique os dados.</p>";
            }
            ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
