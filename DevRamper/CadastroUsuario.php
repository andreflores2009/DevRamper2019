<html>
<header>
  <title>Cadastro de Usuário</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="cerulean/theme/bootstrap.css" media="screen">
 <link rel="stylesheet" href="cerulean/theme/usebootstrap.css">
 <style type="text/css">
body {
	background-image:url(noisy_grid/noisy_grid_@2X.png);
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}
</style>
</header>
<body>
<div class="navbar navbar-default navbar-fixed-top">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Desafio DevRamper 2019 - André Flores dos Santos</a>
</div>
<ul class="nav navbar-nav navbar-right">

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrar <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="/DevRamper/Login.php">Logar</a></li>
</ul>
</li>
</ul>
</div>
</div>

<div class="container" >
  <h2>Cadastro de usuário</h2>
  <form action="CadastroUsuarioDestino.php" method="POST" name="form1">
    <div> <span><b>Nome: </b></span> <br/>
      <input type="text" name="nome" />
    </div>
    <br/>
    <div> <span><b>Email:</b></span> <br/>
      <input type="text" name="email" />
    </div>
    <br/>
    <div> <span><b>Senha</b></span> <br/>
      <input type="password" name="senha" />
    </div>
    <br/>
    <div> <span><b>Endereco</b></span> <br/>
      <textarea name="endereco"></textarea>
    </div>
    <br/>
    <br/>
    <div> <br/>
      <button type="submit" class="btn btn-primary"> Salvar </button>
    </div>
  </form>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="cerulean/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="cerulean/bootstrap/usebootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
	  $(document).ready(function(){
      $(".dropdown-toggle").dropdown();
});  </script>
</body>
</html>
