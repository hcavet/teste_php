<?php

include_once("conexao.php");

$SKU = filter_input(INPUT_POST, 'sku' FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);

$result_produto = "INSERT INTO produtos (sku, nome, descricao, preco, created) VALUES ('$SKU', '$nome', '$descricao', '$preco' NOW())";

$result_produto = mysql_query($conn, $result_produto);


?>