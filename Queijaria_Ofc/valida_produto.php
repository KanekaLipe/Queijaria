<?php
$conexao = new mysqli("localhost", "root", "", "queijaria_bd");

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

$nomeProduto = $_POST["txtNomeProduto"];
$categoria = $_POST["txtCategoria"];
$validade = $_POST["txtValidade"];
$preco = $_POST["txtPreco"];
$qtdMinima = $_POST["txtQtdMinima"];
$qtdEstoque = $_POST["txtQtdEstoque"];

$sql_check = "SELECT * FROM produtos_tb WHERE nome = '$nomeProduto' and validade = '$validade' and preco = $preco";
$resultado = $conexao->query($sql_check);

if ($resultado->num_rows > 0) {
    $sql_update = "UPDATE produtos_tb SET quantidade_estoque = quantidade_estoque + $qtdEstoque WHERE nome = '$nomeProduto' 
    and validade = '$validade' and preco = $preco";
    $conexao->query($sql_update);
} else {
    $sql_insert = "INSERT INTO produtos_tb (nome, categoria, validade, preco, qtd_minima, quantidade_estoque)
                   VALUES ('$nomeProduto', '$categoria', '$validade', '$preco', '$qtdMinima', '$qtdEstoque')";
    $conexao->query($sql_insert);
}

header("Location: produtos.php");
exit();
?>