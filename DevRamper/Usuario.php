<?php
	/** Objeto que vai armazenar todos os dados necessarios para cadastro do usuário */
	class Usuario{
	
	   
		private $nome;
		private $email;
		private $senha;
		private $endereco;

		
		
		
		
		function __construct($nome,$email,$senha,$endereco){
			$this->nome = $nome;
			$this->email =$email;
			$this->senha=$senha;
			$this->endereco=$endereco;
			
		
		}
		
		
		public function retornaNome(){
			return $this->nome;
		}
	
	   
		public function retornaEmail(){
			return $this->email;
		}
		
		public function retornaSenha(){
			return $this->senha;
		}
		
		public function retornaEndereco(){
			return $this->endereco;
		}
		
	
		
		
		
	}
?>
