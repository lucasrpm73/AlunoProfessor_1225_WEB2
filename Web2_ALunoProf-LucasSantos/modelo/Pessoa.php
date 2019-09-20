<?php
	abstract class Pessoa{
		private $nome;
		private $idade;
		private $cpf;
		
		public function Pessoa(){
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setIdade($idade){
			$this->idade = $idade;
		}
		
		public function getIdade(){
			return $this->idade;
		}

		public function setCpf($cpf){
			$this->cpf = $cpf;
		}

		public function getCpf(){
			return $this->cpf;
		}
	}
?>