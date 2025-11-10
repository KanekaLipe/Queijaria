<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$validade = $_POST['validade'];
$preco = $_POST['preco'];
$qtd_minima = $_POST['qtd_minima'];
$quantidade_estoque = $_POST['quantidade_estoque'];

$sql = "UPDATE produtos_tb 
        SET nome='$nome', categoria='$categoria', validade='$validade', preco='$preco',
            qtd_minima='$qtd_minima', quantidade_estoque='$quantidade_estoque'
        WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    header("Location: produtos.php");
    exit();
} else {
    echo "Erro ao atualizar: " . $conexao->error;
}

$conexao->close();
?>
