<?php
session_start();
include("MySQL.php");
$nomeDB = "devramper"; //alterado nome db
$mysql = new MySQL();
$link = $mysql->conectar("localhost","root","");    //funcao conectar esta no MYSQL.php       

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$enviado = $_POST["enviado"];

if ($enviado == "posted"){    
if (!isset($nome) or !isset($senha)) { echo "Erro!";	exit; }  
if (empty($nome) or empty($senha)) { echo "Dados inválidos!"; exit; }
 //$mysql->consultarExistenciaUsuario($nomeDB,$nome,$senha);  // antigo ,funcao esta no MYSQL.php 
 $mysql->consultarExistenciaUsuario($nomeDB,$nome,$senha,$link);  // funcao esta no MYSQL.php 
} 
?>
<script src="js/jquery.js">
    </script>
