<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #fff0e1;">

    <nav class="navbar navbar-expand-lg" style="background-color: #b50000;">
        <?php include 'menu.html'; ?>
    </nav>

    <main class="container-fluid">
    <div class="row py-4 g-3">
        <div class="col-md-3">
            <h4>Filtros</h4>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select id="categoria" class="form-select">
                    <option value="">Todos</option>
                    <option value="queijo">Queijo</option>
                    <option value="leite">Leite</option>
                    <option value="iogurte">Iogurte</option>
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
                
                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/canastra.jpeg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Canastra</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/coalho.jpeg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Coalho</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/gorgonzola.jpg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Gorgonzola</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/gouda.jpeg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Gouda</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/mussarela.jpg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Mussarela</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/parmesao.jpg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Parmesão</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/suico.jpg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Suíço</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="img/freco.jpeg" class="card-img-top mb-2">
                        <h5 class="card-title">Queijo Fresco</h5>
                        <a href="#" class="btn btn-primary mt-2">Alterar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
