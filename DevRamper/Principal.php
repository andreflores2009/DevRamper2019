<html>
<header>
  <title>Principal</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="cerulean/theme/bootstrap.css" media="screen">
  <link rel="stylesheet" href="cerulean/theme/usebootstrap.css">
</header>
<body>
<?php
session_start();
printf("\n Nome do usuário é: %s ",$_SESSION['nome']);
echo "<br>";
printf("\n \n\n\n\n\n");	
printf("Usuario id: %d ",$_SESSION['usuarioId']); 

if (empty($_SESSION['usuarioId'])){
echo "Acesso negado!";
exit;
}else{
include('MySQL.php');

$usuarioId = $_SESSION['usuarioId'];
$nome = $_SESSION['nome'];
//printf("\n Nome é: %s",$nome);
} 
?>
<div class="navbar navbar-default navbar-fixed-top">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  <a class="navbar-brand" href="#">Desafio DevRamper 2019 - André Flores dos Santos</a> </div>
<ul class="nav navbar-nav navbar-center">
  <li class="dropdown""> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário<b class="caret"></b></a>
    <ul class="dropdown-menu">
      <!-- <li><a href="/TrabalhoFinal/EditarUsuario.php">Alterar dados do Usuário</a></li> !-->
      <li><a href="/DevRamper/LogOut.php">Sair</a></li>
    </ul>
  </li>
  <!--
  <li class="dropdown""> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Músicas<b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="/TrabalhoFinal/CadastroMusica.php">Cadastrar Músicas</a></li>
    </ul>
  </li>
  !-->
  </div>
  <ul class="nav navbar-nav navbar-right">
  <li> <a class="brand">Seja Bem Vindo Usuário <?php echo "$nome"; ?></a> </li>
  </ul>
</ul>
</div>
</div>


  <div class="oi">
       <h4> Seja Bem-vindo a página dos Livros!! </h4>
  </div>


 <div id="myCarousel" class="carousel slide" align="center">
      <div class="carousel-inner">
        <div class="item active">
          <img src="livro1.jpg" alt="" >
        </div>
        <div class="item">
          <img src="livro2.jpg" alt="" >
        </div>
		<div class="item">
          <img src="livro3.jpg" alt="" >
        </div>
		<div class="item">
          <img src="livro4.jpg" alt="" >
        </div>
		<div class="item">
          <img src="livro5.jpg" alt="" >
        </div>
		<!-- itens de imagens de livro inseridos na pasta raiz !-->
        
	  </div>
      
      <a class="left carousel-control"  href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control"  href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
	
	
	
	 
  <form action="EscolhaLivroDestino.php" method="post">
            <p> <br> <h4 align="center"> Escolha o tipo do Livro e quantidade!</h3>
			  <div class="radiobutton_livros">				
				<input type="checkbox" name="livro1" value="livro1"/> Livro1 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro1" min="0" max="5" value="0" />  Max(5)
				<br>
				<input type="checkbox" name="livro2" value="livro2"/> Livro2 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro2" min="0" max="5" value="0" />  Max(5)
				<br>				
				<input type="checkbox" name="livro3" value="livro3"/> Livro3 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro3" min="0" max="5" value="0"/>  Max(5)
				<br>
				<input type="checkbox" name="livro4" value="livro4"/> Livro4 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro4" min="0" max="5" value="0"/>  Max(5)
				<br>
				<input type="checkbox" name="livro5" value="livro5"/> Livro5 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro5" min="0" max="5" value="0"/>  Max(5)
				<br>
				<input type="checkbox" name="livro6" value="livro6"/> Livro6 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro6" min="0" max="5" value="0"/>  Max(5)
				<br>
				<input type="checkbox" name="livro7" value="livro7"/> Livro7 
					<span><b>  - Quantidade: </b></span> 
					<input type="number" name="quantidade_livro7" min="0" max="5" value="0"/>  Max(5)
				<br>
				<p>
                <input type="submit" value="Enviar" />
            	</p>

				</div>
				
            </p>
            
</form>

	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script> 
<script src="cerulean/bootstrap/bootstrap.min.js" type="text/javascript"></script> 
<script src="cerulean/bootstrap/usebootstrap.js" type="text/javascript"></script> 
<script type="text/javascript">
	  $(document).ready(function(){
      $(".dropdown-toggle").dropdown();
});  </script> 
<script type="text/javascript">
	  $(document).ready(function(){
$('#myCarousel').carousel();
	  });
</script>
</body>
</html>