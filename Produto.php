<?php
	class Produto{
		public $nome, $descricao,$quantidade, $precoVenda;
			public function setNome($nome){
				$this -> nome = $nome;
			}
			public function setDescricao($descricao){
				$this -> descricao = $descricao;
			}
			public function setQuantidade($quantidade){
				$this -> quantidade = $quantidade;
			}
			public function setPrecoVenda($precoVenda){
				$this -> precoVenda = $precoVenda;
			}
			
			public function getNome(){
				return $this -> nome;
			}
			public function getDescricao(){
				return $this -> descricao;			
			}
			public function getQuantidade(){
				return $this -> quantidade;
			}
			public function getPrecoVenda(){
				return $this -> precoVenda;			
			}
			
			public function cadastrar($dados){
			list($nome, $descricao, $quantidade, $precoVenda) = $dados;
			
			$this -> setNome($nome);
			$this -> setDescricao($descricao);
			$this -> setQuantidade($quantidade);
			$this -> setPrecoVenda($precoVenda);
			
			$conectar = new mysqli ("localhost", "root", "", "RafaelVendas");
			echo $sql = "insert into produto
						(nome, descricao, quantidade, precoVenda)
						values (
						'{$this->getNome()}',
						'{$this->getDescricao()}',
						'{$this->getQuantidade()}',
						'{$this->getPrecoVenda()}'
						)
";
	$gravar= $conectar->query($sql);
	$num= $conectar->affected_rows;
	if($num==1){
		echo "<fieldset>";
		echo "<h2>Sucesso ao gravar dados na classe!</h2>";
		echo "<br>Nome:" .$this->getNome();
		echo "<br>Descrição:" .$this->getDescricao();
		echo "<br>Quantidade:" .$thsi->getQuantidade();
		echo "<br>Preço Venda:" .$thsi->getPrecoVenda();
		echo "</fieldset>";	
	}else{
		echo "<fieldset>";
		echo "Erro ao gravar dados!";
		echo "</fieldset>";	
		}
	}
}
?>