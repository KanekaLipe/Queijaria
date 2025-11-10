<?php
$conexao = new mysqli("localhost", "root", "", "queijaria_bd");

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos_tb WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        header("Location: produtos.php");
        exit();
    } else {
        echo "Erro ao excluir produto: " . $conexao->error;
    }
} else {
    echo "Produto não encontrado.";
}

$conexao->close();
?>
