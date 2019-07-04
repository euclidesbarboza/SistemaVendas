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
		list($nome, $email, $telefone) = $dados;
		
		$this -> setNome($nome);
		$this -> setEmail($email);
		$this -> setTelefone($telefone);
		
		$conectar = new mysqli ("localhost", "root", "","RafaelVendas");
		echo $sql= "insert into cliente
					(nome, email, telefone)
					values (
					'{$this->getNome()}',
					'{$this->getEmail()}',
					'{$this->getTelefone()}'
					)
";
	$gravar = $conectar->query($sql);
	$num= $conectar->affected_rows;
	if($num==1){
		echo "<fieldset>";
		echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!</h2>";
		echo "<br>Nome:" .$this->getNome();
		echo "<br>Email:" .$this->getEmail();
		echo "<br>Telefone:" .$this->getTelefone();
		echo "</fieldset>";
	}else{
		echo "<fieldset>";
		echo "Erro ao gravar dados!";
		echo "</fieldset>"; 
	}
		}
}
?>