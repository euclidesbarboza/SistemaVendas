<?php
	class Produto{
		public $nome, $descricao,$quantidade, $precoVenda;
			public function setNome($nome){
				$this -> nome = $nome;
			}
			public function setDescricao($descricao){
				$this -> descricao = $descricao;
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
			public function getPrecoVenda(){
				return $this -> precoVenda;			
			}
			
			public function cadastrar($dados){
			$dados = array ($nome, $descricao, $quantidade, $precoVenda) = $dados;
			
			$this -> setNome($nome);
			$this -> setDescricao($descricao);
			$this -> setQuantidade($quantidade);
			$this -> setPrecoVendo($precoVenda);
			
			$conectar = new msqli ("localhost", "root", "", "RafaelVendas");
			$sql = "insert into produto
						(nome, descricao, quantidade, precoVenda)
						values ()
						'{$this->getNome()}'
						'{$this->getDescricao()}'
						'{$this->getQuantidade()}'
						'{$this->getPrecoVenda()}'
						)
";
			}
}
?>