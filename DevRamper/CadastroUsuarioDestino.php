
  <?php
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $endereco = $_POST["endereco"];

       
     

            include("Usuario.php");
            include("MySQL.php");
            
            // objeto que armazena os dados do usuario
            $usuario = new Usuario($nome,$email,$senha,$endereco);
            $nomeDB = "devramper"; //alterado
            $mysql = new MySQL();
            //$mysql->conectar("localhost","root",""); //antigo
			$link = $mysql->conectar("localhost","root",""); //adicionado $link
            //$mysql->criarBanco($nomeDB); // chama o método para criar o banco 
            //$mysql->criarTabelaUsuario();// chama o método para criar a tabela usuario
            //envia o objeto contendo as informacoes do usuario para ser cadastrado.
            $mysql->insereDadosTabelaUsuario($nomeDB,$usuario,$link);
			echo("<br/>");
			echo("<br/>");
			echo("<br/>");
			echo("<br/>");
			echo("<br/>");
			?>
  

<script src="js/jquery.js">
    </script>
