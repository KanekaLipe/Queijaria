<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/Queijaria_Ofc/style.css">
    <style>
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .checkbox-item {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body style="background-color: #fff0e1;">

    <nav class="navbar navbar-expand-lg" style="background-color: #b50000;">
        <?php include 'menu.html'; ?>
    </nav>

    <div class="container d-flex justify-content-center" style="padding-top: 80px; padding-bottom: 80px;">
        <form method="POST" action="valida_produto.php" class="border p-4 shadow rounded-5 bg-light" style="width: 750px;">
            <h2 class="text-center mb-4">Tipo de Movimentação </h2>

            <!--Checkbox do TIpo de Movimentação ENTRADA / SAIDA -->
            <div id="Box_ES" class="mt-4">
            <div class="col-md-6">
                <div class="checkbox-container">
                    <!--ENTRADA-->
                    <div class="checkbox-item">
                        <input class="form-check-input" type="checkbox" id="entrada">
                        <label class="form-check-label ms-2" for="entrada">Entrada</label>
                    </div>
                    <!--SAIDA-->
                    <div class="checkbox-item">
                        <input class="form-check-input" type="checkbox" id="saida">
                        <label class="form-check-label ms-2" for="saida">Saída</label>
                    </div>
                </div>
            </div>
        </div>

            <div class="mb-3">
                <label for="txtNomeProduto" class="form-label"> Produto </label>
                <input type="text" name="txtNomeProduto" class="form-control" id="txtNomeProduto" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade:</label>
                <div class="input-group">
                    <button class="btn btn-outline-secondary" type="button">-</button>
                    <input type="number" class="form-control text-center" value="1">
                    <button class="btn btn-outline-secondary" type="button">+</button>
                </div>
            </div>

            <div class="mb-3">
                <label for="txtValidade" class="form-label"> Data </label>
                <input type="date" name="txtValidade" class="form-control" id="txtValidade" required>
            </div>

            <div class="mb-3">
                <label for="txtPreco" class="form-label"> Responsavel </label>
                <input type="text" name="txtNomeProduto" class="form-control" id="txtNomeProduto" required>
            </div>

            <div class="mb-3">
                <label for="txtQtdMinima" class="form-label">Quantidade Mínima</label>
                <input type="number" name="txtQtdMinima" class="form-control" id="txtQtdMinima" required>
            </div>


            <!--PARTE OPERACIONAL-->

            <h3 class="text-center"> Detalhes Operacionais </h3>
            <div class="mb-3">
                <label for="txtCategoria" class="form-label"> Lote: </label>
                <input type="text" name="txtCategoria" class="form-control" id="txtCategoria" required>
            </div>

            <div class="mb-3">
                <label for="txtValidade" class="form-label"> Validade </label>
                <input type="date" name="txtValidade" class="form-control" id="txtValidade" required>
            </div>

            <div class="mb-3">
                <label for="txtPreco" class="form-label"> Observações </label>
                <input type="text" name="txtNomeProduto" class="form-control" id="txtNomeProduto" required>
            </div>
            <div class="container mt-4">
                <div class="row justify-content-center g-3">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-custom" style="background-color: #d40000; color: white; min-width: 200px;">
                            Salvar
                        </button>
                    </div>
                    <div class="col-auto">
                        <button type="reset" class="btn btn-custom" style="background-color: #d40000; color: white; min-width: 200px;">
                            Limpar
                        </button>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-custom" style="background-color: #d40000; color: white; min-width: 200px;">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
            <!--<button type="submit" class="btn w-50 d-block mx-auto mt-4" style="background-color: #d40000; color: white;">Cadastrar Produto</button>
            -->
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