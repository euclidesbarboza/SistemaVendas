<?php
class Cliente{
	public $nome, $email, $telefone;
		public function setNome($nome){
			$this -> nome = $nome;
		}
		public function setEmail($email){
			$this -> email = $email;
		}
		public function setTelefone($telefone){
			$this -> telefone = $telefone;
		}
		
		public function getNome(){
			return $this -> nome;
		}
		public function getEmail(){
			return $this -> email;
		}
		public function getTelefone(){
			return $this -> telefone;
		}
		
		public function cadastrar($dados){
		$dados = array ($nome, $email, $telefone) = $dados;
		
		$this -> setNome($nome);
		$this -> setEmail($emial);
		$this -> setTelefone($telefone);
		
		$conectar = new msqli ("localhost", "root", "","RafaelVendas");
		$sql= "insert into cliente
					(nome, email, telefone)
					values (
					'{$this->getNome()}'
					'{$this->getEmail()}'
					'{$this->getTelefone()'
					)
";
		}
}
?>