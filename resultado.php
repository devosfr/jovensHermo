<?php require_once('Connections/conexao.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$busca_resultado = "-1";
if (isset($_GET['busca'])) {
  $busca_resultado = $_GET['busca'];
}
mysql_select_db($database_conexao, $conexao);
$query_resultado = sprintf("SELECT * FROM busca_simples WHERE titulo LIKE %s ORDER BY id DESC", GetSQLValueString($busca_resultado . "%", "text"));
$resultado = mysql_query($query_resultado, $conexao) or die(mysql_error());
$row_resultado = mysql_fetch_assoc($resultado);
$totalRows_resultado = mysql_num_rows($resultado);
?><!--<?php require_once"conexao/db.php" ?>-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>.::Resultado::.</title>
<link href="estilos.css" rel="stylesheet" type="text/css" media="screen" />

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<style type="text/css">

</style>
</head>
<body>

<div id="nav_box">
	<img src="images/logo.png">
	<nav>
     <a href="#home">Home</a>
	 <a href="#empresa">Quem Somos</a>
     <a href="#videos">Vdeos</a>
     <a href="#fotos">Fotos</a>
     <a href="#contato">Contato</a>
</nav>
</div><!--fecha nav box-->

<section id="resultado">
 <h1>Resultado</h1>
 <a href="index.php" class="btn btn-info">Voltar</a>
 
 
 <center><table width="1075" border="0" cellspacing="3" cellpadding="3">
  <?php if ($totalRows_resultado == 0) { // Show if recordset empty ?>
    <tr>
      <td width="962">Nenhum Resultado...</td>
    </tr>
     <?php } // Show if recordset empty ?>

     <?php do { ?>
     <tr>
       <td><a href="conteudo.php?id=<?php echo $row_resultado['id']; ?>"><?php echo $row_resultado['titulo']; ?></a></td>
     </tr>
       <?php } while ($row_resultado = mysql_fetch_assoc($resultado)); ?>
</table></center>

 
 <!--
 <?php 
  
  $selecionar = "select * from busca_simples"; 
  $r = mysql_query($selecionar) or die ("erro ao selecionar a tabela!"); 
  
  while($linha = mysql_fetch_assoc($r)){
   echo $linha['titulo']."<br>";
   echo $linha['conteudo'];
  }
 
  ?>-->
  
 </section>
  
</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php
mysql_free_result($resultado);
?>
