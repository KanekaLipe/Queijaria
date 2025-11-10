<?php
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$telefone = $_POST["txtTelefone"];
$login = $_POST["txtLogin"];
$senha = $_POST["txtSenha"];
$confirmaSenha = $_POST["txtConfirmaSenha"];

if ($senha !== $confirmaSenha) {
    header("Location: index.php?erro");
    exit();
}

$cookie_name = $login;
$cookie_valor = $senha;
setcookie('login', $cookie_name);
setcookie('senha', $cookie_valor);

header("Location: login.php");
exit();
?>
