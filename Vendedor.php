<?php
class vendedor{
	public $nome, $email, $salarioFixo;
		public function setNome($nome){
			$this -> nome = $nome;		
		}
		public function setEmail($email){
			$this -> email = $email;
		}
		public function setSalariFixo($slarioFixo){
			$this -> salarioFixo = $salariFixo;		
		}
		
		public function getNome(){
			return $this -> nome;		
		}
		public function getEmail(){
			return $this -> email;		
		}
		public function getSalarioFixo(){
			return $this -> salarioFixo;
		}
		 public function cadastrar($dados){
		$dados = array ($nome, $email, $salarioFixo);
		
		$this -> setNome($nome);
		$this -> setEmai($email);
		$this -> setSalarioFixo($salarioFixo);
		
		$conectar = new msqli("localhost", "root", "", "RafaelVendas");
		$sql = "insert into vendedor
					(nome, email, salarioFixo)
					values (
					'{$this->getNome()}'
					'{$this->getEmail()}'
					'{$this->getSalarioFixo()}'
					)
";
		 }
}
?>