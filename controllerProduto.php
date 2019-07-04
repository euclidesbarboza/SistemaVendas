<?php
	$nome = filter_input(INPUT_POST, "nome");
	$descricao = filter_input(INPUT_POST, "descricao");
	$quantidade = filter_input(INPUT_POST, "quantidade");
	$precoVenda = filter_input(INPUT_POST, "precoVenda");
	
	$dados= array($nome, $descricao, $quantidade, $precoVenda);

	include("Produto.php");
	$prod = new Produto(); 
	$prod->cadastrar($dados);
?>