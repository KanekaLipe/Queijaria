<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/Queijaria_Ofc/style.css">
    <link rel="manifest" href="/Queijaria_Ofc/Manifest.json">
    <meta name="theme-color" content="#b50000">
    <link rel="icon" href="img/queijo.png" type="image/png">
    <link rel="apple-touch-icon" href="img/queijo.png">

</head>
<body style="background-color: #fff0e1;">

    <nav class="navbar navbar-expand-lg" style="background-color: #b50000;">
        <?php include 'menu.html'; ?>
    </nav>

    <div class="container d-flex justify-content-center" style="padding-top: 80px; padding-bottom: 80px;">
        <form method="POST" action="valida_cadastro.php" class="border p-4 shadow rounded-5 bg-light" style="width: 750px;">
            <h2 class="text-center mb-4">Cadastro</h2>

            <div class="mb-3">
                <label for="txtNome" class="form-label">Nome completo</label>
                <input type="text" name="txtNome" class="form-control" id="txtNome" required>
            </div>

            <div class="mb-3">
                <label for="txtEmail" class="form-label">E-mail</label>
                <input type="email" name="txtEmail" class="form-control" id="txtEmail" required>
            </div>

            <div class="mb-3">
                <label for="txtTelefone" class="form-label">Telefone</label>
                <input type="text" name="txtTelefone" class="form-control" id="txtTelefone" required>
            </div>

            <div class="mb-3">
                <label for="txtLogin" class="form-label">Login</label>
                <input type="text" name="txtLogin" class="form-control" id="txtLogin" required>
            </div>

            <div class="mb-3">
                <label for="txtSenha" class="form-label">Senha</label>
                <input type="password" name="txtSenha" class="form-control" id="txtSenha" required>
            </div>

            <div class="mb-3">
                <label for="txtConfirmaSenha" class="form-label">Confirmar Senha</label>
                <input type="password" name="txtConfirmaSenha" class="form-control" id="txtConfirmaSenha" required>
            </div>

            <button type="submit" class="btn w-50 d-block mx-auto" style="background-color: #d40000; color: white;">Cadastrar</button>

            <?php
            if (isset($_GET['erro'])) {
                echo "<p class='alert alert-danger text-center mt-3'>As suas senhas não coincidem. Tente novamente.</p>";
            }
            ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
    // Registrar SW com scope relativo (recomendado)
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('sw.js', { scope: '/Queijaria_Ofc/' })
        .then(reg => {
          console.log('Service Worker registrado com scope:', reg.scope);
        }).catch(err => {
          console.warn('Falha ao registrar Service Worker:', err);
        });
    }
    </script>
</body>
</html>
