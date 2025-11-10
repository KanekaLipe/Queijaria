<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #fff0e1;">

<nav class="navbar navbar-expand-lg" style="background-color: #b50000;">
    <?php include 'menu.html'; ?>
</nav>

<div class="container mt-4 d-flex justify-content-center buscar">
    <form class="d-flex" method="GET" action="produtos.php" style="max-width: 500px; width: 100%;">
        <input class="form-control me-2" type="search" name="busca" placeholder="Buscar produto..." aria-label="Buscar"
        value="<?php echo isset($_GET['busca']) ? $_GET['busca'] : ''; ?>">
        <button class="btn btn-danger" type="submit">Buscar</button>
    </form>
</div>

<style>.buscar {
    width: 100%;
    display: flex;
    margin-left: 18.5rem;
    margin-bottom: -10px;
}
</style>

<main class="container-fluid">
    <div class="row py-4 g-3">
        <div class="col-md-3">
            <h4>Filtros</h4>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select id="categoria" class="form-select">
                    <option value="">Todos</option>
                    <option value="queijo">Queijo</option>
                    <option value="vinhos">Vinhos</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço Máximo</label>
                <input type="number" id="preco" class="form-control" placeholder="R$">
            </div>
            <button class="btn btn-danger w-100">Aplicar Filtros</button>
        </div>

        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                <?php
                if (isset($_GET['busca']) && $_GET['busca'] != '') {
                    $busca = $conexao->real_escape_string($_GET['busca']);
                    $sql = "SELECT * FROM produtos_tb WHERE nome LIKE '%$busca%'";
                } else {
                    $sql = "SELECT * FROM produtos_tb";
                }

$resultado = $conexao->query($sql);


                if ($resultado->num_rows > 0) {
                    while ($linha = $resultado->fetch_assoc()) {
                        echo "
                        <div class='col'>
                            <div class='card h-100 p-3'>
                                <img src='img/queijo_padrao.jpg' class='card-img-top mb-2' alt='Produto'>
                                <h5 class='card-title'>{$linha['nome']}</h5>
                                <p class='card-text'>Categoria: {$linha['categoria']}</p>
                                <p class='card-text'>Validade: {$linha['validade']}</p>
                                <p class='card-text'>Preço: R$ {$linha['preco']}</p>
                                <p class='card-text'>Estoque: {$linha['quantidade_estoque']}</p>
                                <p class='card-text'>Qtd Mínima: {$linha['qtd_minima']}</p>
                                <a href='#' class='btn btn-primary mt-2'>Comprar</a>
                                <a href='editar_produto.php?id={$linha['id']}' class='btn btn-warning mt-2 btn-editar'>Alterar</a>
                                <a href='excluir_produto.php?id={$linha['id']}' class='btn btn-danger mt-2'>Excluir</a>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<p class='text-center mt-4'>Nenhum produto cadastrado ainda.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</main>

</body>
</html>
