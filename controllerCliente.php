<?php
	$nome = filter_input(INPUT_POST, "nome");
	$email = filter_input(INPUT_POST, "email");
	$telefone = filter_input(INPUT_POST, "telefone");
	
	$dados= array($nome, $email, $telefone);
	
	include("Cliente.php");
	$clie = new Cliente(); 
	$clie->cadastrar($dados);
?>