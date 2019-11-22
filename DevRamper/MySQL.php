<?php
  class MySQL{
		//private $nomeBanco="devramper"; //alterado nome db
		private $link; //criada
        public function conectar(){
			   $nomeBanco="devramper"; //alterado nome db
			   $link; //criada
               $host = "localhost";
               $usuario = "root";
               $senha = "";
			   // $link = mysqli_connect($host,$usuario,$senha) or die (mysqli_error()); //antigo
               $link = mysqli_connect($host,$usuario,$senha,$nomeBanco) or die (mysqli_error()); //alterado
			   return $link; //adicionado
        }
        
		
		/** cria um novo BD, recebe por parametro o nome que sera atribuido ao mesmo */
		public function criarBanco(){
		$sql ="create database ".$this->nomeBanco;
		mysqli_query($sql) or die(mysqli_error());
		}
        
		/** Cria a tabela usuário, recebe por parametro o nome do DB onde serah criada a tabela */
        public function criarTabelaUsuario(){
               mysqli_select_db($this->nomeBanco);
               $sql = "create table usuario ( usuarioId int(3) not null auto_increment primary key,
                                             nome VARCHAR(100) not null,
											 email VARCHAR(100) not null,
                                             senha VARCHAR(50) not null,
											 endereco VARCHAR(250) not null)";
               mysqli_query($sql);
			   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully )
    window.location.href='/TrabalhoFinal/Principal.php';
    </SCRIPT>");
		
        }
		public function carregarDadosUsuario($nomeBanco,$usuarioId){
		         mysqli_select_db($nomeBanco);
			     $sql = "select *from usuario 
                                   where usuarioId = '$usuarioId'" or die (mysqli_error());
			     
				 $resultado = mysqli_query($sql);
			     $array = mysqli_fetch_array($resultado);
			     $vetor[0] = $array['nome'];
				 $vetor[1] = $array['email'];
				 $vetor[2] = $array['senha'];
				 $vetor[3] = $array['endereco'];
			     return $vetor;
			   
			
		
		}
		
		
		
		//public function consultarExistenciaUsuario($nomeBanco,$nome,$senha){ //antigo
		public function consultarExistenciaUsuario($nomeBanco,$nome,$senha,$link){ 
		mysqli_select_db($link,$nomeBanco); //link adicionado
		$query = "select * from usuario where nome = '$nome' and senha = '$senha'";
		//$result = mysqli_query($link,$query); //alterado //antigo
		$result = mysqli_query($link,$query); //alterado
		$number = mysqli_num_rows($result);		
	    if ($number==0) { echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Autorização inexistente/Senha inválida ou expirada.' )
    window.location.href='/DevRamper/Login.php';
    </SCRIPT>"); //alterado local pasta
		exit;
		} else {
		//$_SESSION['usuarioId'] = mysqli_result($result,0,'usuarioId'); antigo
		$usuario = mysqli_fetch_assoc($result);
		$_SESSION['usuarioId'] = $usuario['usuarioId'];
		//printf("Usuario: %d",$_SESSION['usuarioId']);		
		//$_SESSION['nome'] = mysqli_result($result,0,'nome'); antigo
		//$name = mysqli_fetch_assoc($result);
		//$name = mysqli_fetch_assoc($result);
		$_SESSION['nome'] = $usuario['nome'];
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    	window.location.href='/DevRamper/Principal.php'; 
    </SCRIPT>");  //alterado local pasta
		}

		}
		//public function insereDadosTabelaUsuario($nomeBanco, $dadosUsuario){ 
		public function insereDadosTabelaUsuario($nomeBanco, $dadosUsuario, $link){ //adicionado $link
               mysqli_select_db($link,$nomeBanco); //link adicionado
			   //mysqli_select_db($nomeBanco);		//antigo	  
			     // extrai as informacoes do objeto recebido
			   $nome =$dadosUsuario->retornaNome();
  			   $email = $dadosUsuario->retornaEmail();
  			   $senha=$dadosUsuario->retornaSenha();
			   $endereco=$dadosUsuario->retornaEndereco();
 			  
  			   
			   $sql = "insert into usuario VALUES ('0','".$nome."','".$email."','".$senha."','".$endereco."')";
               mysqli_query($link,$sql)or die (mysqli_error()); //alterado
			   //$_SESSION['usuarioId'] = mysqli_result($result,0,'usuarioId'); antigo
			   $_SESSION['usuarioId'] = mysqli_fetch_assoc($result,8,'usuarioId');
			   //$_SESSION['nome'] = mysqli_result($result,0,'nome'); antigo
			   $_SESSION['nome'] = mysqli_fetch_assoc($result,8,'nome'); 
		       echo ("<SCRIPT LANGUAGE='JavaScript'>
    	       window.location.href='/DevRamper/Login.php';
    </SCRIPT>"); //alterado nome do projeto
        }
		
		
			public function alterarDadosUsuario($nomeBanco,$usuarioId,$nome,$email,$senha,$endereco){
               mysqli_select_db($nomeBanco);
               mysqli_query("update usuario set nome='$nome', email='$email', senha='$senha', endereco='$endereco'
                                   where usuarioId = '$usuarioId'") or die (mysqli_error());
			  echo ("<SCRIPT LANGUAGE='JavaScript'>
			  window.alert('Dados do Usuário Alterados com sucesso.')
    		  window.location.href='/TrabalhoFinal/Principal.php';
    </SCRIPT>");
		    }
			 public function ExcluirDadosUsuario($nomeBanco,$usuarioId){
               mysqli_select_db($nomeBanco);
               mysqli_query("delete from usuario where usuarioId='$usuarioId'") or die (mysqli_error());
			    
        }	  
		
		
		
		
  }
  
  
  
?>
