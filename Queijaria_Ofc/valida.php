<?php
$login = $_POST["txtLogin"];
$senha = $_POST["txtSenha"];

if($login == $_COOKIE['login'] && $senha == $_COOKIE['senha']){
    session_start();
    $_SESSION['user'] = $login;
    header("Location: cadastrar_produto.php");
    exit();
} else {
    header("Location: login.php?erro");
    exit();
}

?>