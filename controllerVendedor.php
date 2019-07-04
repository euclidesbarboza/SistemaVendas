<?php
	$nome = filter_input(INPUT_POST, "nome");
	$email = filter_input(INPUT_POST, "email");
	$salarioFixo = filter_input(INPUT_POST, "salarioFixo");
	
	$dados= array($nome, $email, $salarioFixo);
	
	include("Vendedor.php");
	$vend = new Vendedor(); 
	$vend->cadastrar($dados);
?>