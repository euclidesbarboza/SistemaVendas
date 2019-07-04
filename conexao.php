<?php
	$local= "localhost";
	$user="root";
	$senha= "";
	$database="RafaelVendas";

	$conectar= new mysqli($local, $user, $senha, $database);
	return $conectar;
?>