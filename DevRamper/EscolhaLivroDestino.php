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

/*
printf("\n Nome do usuário é: %s ",$_SESSION['nome']);
echo "<br>";
printf("\n \n\n\n\n\n");  
printf("Usuario id: %d ",$_SESSION['usuarioId']); 
*/


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
      <li><a href="/DevRamper/Principal.php">Voltar</a></li>
      <li><a href="/DevRamper/LogOut.php">Sair</a></li>
    </ul>
  </li>

  
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
  
  




<div class="exibe_dados">
    <h4> Resultados do preco final: </h4>
      <?php
        
      //recebe os dados do tipo do livro que vai querer e quantidade dele. Ex: livro1 2 cópias
      $livro1_recebido=$_POST['livro1']=(isset($_POST['livro1'])) ? true : null;
      //$quantidadelivro1= (int)$_POST['quantidade_livro1']=(isset($_POST['quantidade_livro1'])) ? true : null;
      if($livro1_recebido==0){
        $quantidadelivro1=0;
      }else{
      $quantidadelivro1= (int)$_POST['quantidade_livro1'];
      }

      //Livro2  
      $livro2_recebido=$_POST['livro2']=(isset($_POST['livro2'])) ? true : null;
      if($livro2_recebido==0){
        $quantidadelivro2=0;
      }else{
      $quantidadelivro2= (int)$_POST['quantidade_livro2'];
      }

      //Livro3 
      $livro3_recebido=$_POST['livro3']=(isset($_POST['livro3'])) ? true : null;
      if($livro3_recebido==0){
        $quantidadelivro3=0;
      }else{
      $quantidadelivro3= (int)$_POST['quantidade_livro3'];
      }

      //Livro4
      $livro4_recebido=$_POST['livro4']=(isset($_POST['livro4'])) ? true : null;
      if($livro4_recebido==0){
        $quantidadelivro4=0;
      }else{
      $quantidadelivro4= (int)$_POST['quantidade_livro4'];
      }

      //Livro5
      $livro5_recebido=$_POST['livro5']=(isset($_POST['livro5'])) ? true : null;
      if($livro5_recebido==0){
        $quantidadelivro5=0;
      }else{
      $quantidadelivro5= (int)$_POST['quantidade_livro5'];
      }

      //Livro6
      $livro6_recebido=$_POST['livro6']=(isset($_POST['livro6'])) ? true : null;
      if($livro6_recebido==0){
        $quantidadelivro6=0;
      }else{
      $quantidadelivro6= (int)$_POST['quantidade_livro6'];
      }

      //Livro7
      $livro7_recebido=$_POST['livro7']=(isset($_POST['livro7'])) ? true : null;
      if($livro7_recebido==0){
        $quantidadelivro7=0;
      }else{
      $quantidadelivro7= (int)$_POST['quantidade_livro7'];
      }

        //informaçoes da sessao do usuario
        //session_start();
        printf("\n Nome do usuário é: %s ",$_SESSION['nome']);
        echo "<br>";    
        printf("Usuario id: %d ",$_SESSION['usuarioId']); 
        echo "<br>";

        //informaçoes dos tipos de livros escolhidos e quantidade, apenas para testar e imprimir na tela, após comentar
        printf(" \n Livro1_marcado: %d \n",$livro1_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro1 escolhido: %d ",$quantidadelivro1);

        //livro2
        echo "<br>";
        printf(" \n Livro2_marcado: %d \n",$livro2_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro2 escolhido: %d ",$quantidadelivro2);

        //livro3
        echo "<br>";
        printf(" \n Livro3_marcado: %d \n",$livro3_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro3 escolhido: %d ",$quantidadelivro3);

        //livro4
        echo "<br>";
        printf(" \n Livro4_marcado: %d \n",$livro4_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro4 escolhido: %d ",$quantidadelivro4);

        //livro5
        echo "<br>";
        printf(" \n Livro5_marcado: %d \n",$livro5_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro5 escolhido: %d ",$quantidadelivro5);

        //livro6
        echo "<br>";
        printf(" \n Livro6_marcado: %d \n",$livro6_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro6 escolhido: %d ",$quantidadelivro6);

        //livro7
        echo "<br>";
        printf(" \n Livro7_marcado: %d \n",$livro7_recebido);// zero= nao marcado , marcado=1
        //echo "<br>";
        printf(" \n --  Quantidade Livro7 escolhido: %d ",$quantidadelivro7);



        /* PROBLEMA 
        Uma livraria contem 7 livros distintos e possui um esquema de descontos que leva em consideracao se é o mesmo título ou não. O problema consiste em calcular o melhor desconto para o cliente. 
        Preco de um titulo qualquer R$ 42,00

        Descontos: 
          2 livros - 5%
          3 livros - 10%
          4 livros - 15%
          5 livros - 20%

          Quanto custa?
            2 cópias  do primeiro livro
            2 cópias do segundo livro
            2 cópias do terceiro livro
            1 cópia do quarto livro
            1 cópia do quinto livro

          Resposta R$ 268,80 (80% do total)
          Note que o preco deve ser o menor valor obtido combinando os livros. 2 conjuntos de 4 livros é melhor que 1 de 5 livros e 1 de 3 livros.

          */

          $zero = (int)0;
          $combina_total = (int)0;
          $preco_total = (float) 0.00;
          $valor_final = (float) 0.00;
          $valor_desconto = (float) 0.00;

          /*verificacao livro1, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if ( ($quantidadelivro1<2) && ($quantidadelivro1!=0) ){
            $preco_total = 42.00;
			$valor_final = $preco_total;
          }else{
          $combina_total = $quantidadelivro1;
          }

          /*verificacao livro2, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if( ($quantidadelivro2<2) && ($quantidadelivro2!=0) ){
            $preco_total = ($preco_total + 42.00);
			$valor_final = $preco_total;
          }else{
          $combina_total = ($combina_total + $quantidadelivro2);
          }

          /*verificacao livro3, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if( ($quantidadelivro3<2) && ($quantidadelivro3!=0) ){
            $preco_total = ($preco_total + 42.00);
			$valor_final = $preco_total;
          }else{
          $combina_total = ($combina_total + $quantidadelivro3);
          }

          /*verificacao livro4, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if( ($quantidadelivro4<2) && ($quantidadelivro4!=0) ){
            $preco_total = ($preco_total + 42.00);
			$valor_final = $preco_total;
          }else{
          $combina_total = ($combina_total + $quantidadelivro4);
          }

          /*verificacao livro5, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if( ($quantidadelivro5<2) && ($quantidadelivro5!=0) ){
            $preco_total = ($preco_total + 42.00);
			$valor_final = $preco_total;
          }else{
          $combina_total = ($combina_total + $quantidadelivro5);
          }

          /*verificacao livro6, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if( ($quantidadelivro6<2) && ($quantidadelivro6!=0) ){
            $preco_total = ($preco_total + 42.00);
			$valor_final = $preco_total;
          }else{
          $combina_total = ($combina_total + $quantidadelivro6);
          }

          /*verificacao livro7, se vai ser 1 copia apenas valor de R$42,00 se for mais de uma copia verificar as possibilidades de combinacao*/
          if( ($quantidadelivro7<2) && ($quantidadelivro7!=0) ){
            $preco_total = ($preco_total + 42.00);
			$valor_final = $preco_total;
          }else{
          $combina_total = ($combina_total + $quantidadelivro7);
          }


          //-------------------------------------------------------------------------------------------------------
          //descontos sob o preco total final
          //20% se quantidade total > 5 livros combinados
          if($combina_total>4){
             $valor_final =  ( ($combina_total*42) + ($preco_total) );
             $valor_desconto = ($valor_final *20)/100;  //20% se quantidade > 5
              $valor_final =  ($valor_final - $valor_desconto);
          }else
          //15% se quantidade total > 4 livros combinados
          if($combina_total>3){
             $valor_final =  ( ($combina_total*42) + ($preco_total) );
             $valor_desconto = ($valor_final *15)/100;  //15% se quantidade > 5
              $valor_final =  ($valor_final - $valor_desconto);
          }else
          //10% se quantidade total > 3 livros combinados
          if($combina_total>2){
             $valor_final =  ( ($combina_total*42) + ($preco_total) );
             $valor_desconto = ($valor_final *10)/100;  //10% se quantidade > 5
              $valor_final =  ($valor_final - $valor_desconto);
          }else
          //5% se quantidade total > 2 livros combinados
          if($combina_total>1){
             $valor_final =  ( ($combina_total*42) + ($preco_total) );
             $valor_desconto = ($valor_final *5)/100;  //5% se quantidade > 5
              $valor_final =  ($valor_final - $valor_desconto);
          }




        //preco_total
        echo "<br>";
        //printf(" \n Preco_total R$ %0.02f \n",$preco_total);// 
        //echo "<br>";
        printf(" \n Combinacoes = %d \n",$combina_total);//
        echo "<br> <b>";
        printf(" \n valor_final = %0.02f \n",$valor_final);//
        echo "</b><br>";echo "</b><br>";echo "</b><br>";
        echo "<br>";


      
    ?>
 
</div> 


<script src="js/jquery.js">
    </script>

  
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