<html>
<head>
<meta charset="utf-8">
<title>Login DevRamper 2019</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link rel="stylesheet" href="cerulean/theme/bootstrap.css" media="screen">
<link rel="stylesheet" href="cerulean/theme/usebootstrap.css">

<style type="text/css">
body {
	background-image:url(noisy_grid/noisy_grid_@2X.png);
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}
.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading, .form-signin .checkbox {
	margin-bottom: 10px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
</style>
<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
<html>
<header>
  <title>DevRamper</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
</header>
<body>

<div class="navbar navbar-default  navbar-fixed-top">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Desafio DevRamper 2019 - André Flores dos Santos</a>
</div>

</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">

  <form class="form-signin"  action="Validacao.php" method="post">
    <h2 class="form-signin-heading">Entrar</h2>
    <input type="text" class="input-block-level" name="nome" placeholder="usúario">
    <input type="password" class="input-block-level" name="senha" placeholder="senha">
    <label class="checkbox">
      <input type="checkbox" value="remember-me">
      Remember me </label>
    <div>
      <input  type='hidden' name="enviado" value="posted">
      <button class="btn btn-large btn-info" type="submit">Logar</button>
      <button type="button" class="btn btn-large btn-info" onClick="location. href='/DevRamper/CadastroUsuario.php'"> nova conta </button>

    </div>
  </form>
  
</div>
<!-- /container --> 

<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
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