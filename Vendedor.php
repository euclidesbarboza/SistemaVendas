<?php
class vendedor{
	public $nome, $email, $salarioFixo;
		public function setNome($nome){
			$this -> nome = $nome;		
		}
		public function setEmail($email){
			$this -> email = $email;
		}
		public function setSalarioFixo($salarioFixo){
			$this -> salarioFixo = $salarioFixo;		
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
		list($nome, $email, $salarioFixo) = $dados;
		
		$this -> setNome($nome);
		$this -> setEmail($email);
		$this -> setSalarioFixo($salarioFixo);
		
		$conectar = new mysqli("localhost", "root", "", "RafaelVendas");
		echo $sql = "insert into vendedor
					(nome, email, salarioFixo)
					values (
					'{$this->getNome()}',
					'{$this->getEmail()}',
					'{$this->getSalarioFixo()}'
					)
";
		$gravar = $conectar->query($sql);
		$num = $conectar->affected_rows;
		if($num==1) {
			echo "<fieldset>";
			echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!!!</h2>";
			echo "<br>Nome: ". $this->getNome();
			echo "<br>Email: ". $this->getEmail();
			echo "<br>Salario Fixo: ". $this->getSalarioFixo();	
			echo "</fieldset>";
		}else {
			echo "<fieldset>";
			echo "Erro ao gravar os dados";	
			echo "</fieldset>";
			}
	}
}
?>