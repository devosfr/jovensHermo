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

$colname_conteudo = "-1";
if (isset($_GET['id'])) {
  $colname_conteudo = $_GET['id'];
}
mysql_select_db($database_conexao, $conexao);
$query_conteudo = sprintf("SELECT * FROM busca_simples WHERE id = %s", GetSQLValueString($colname_conteudo, "int"));
$conteudo = mysql_query($query_conteudo, $conexao) or die(mysql_error());
$row_conteudo = mysql_fetch_assoc($conteudo);
$totalRows_conteudo = mysql_num_rows($conteudo);
?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>.::conteudo::.</title>
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
  <a href="#videos">Vídeos</a>
  <a href="#fotos">Fotos</a>
  <a href="#contato">Contato</a>
 </nav>
</div><!--fecha nav box-->

<section id="conteudo">
  <a href="index.php" class="btn btn-info link">Voltar para a pagina inicial</a><br>

<center><table width="799" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="1092"><p><?php echo $row_conteudo['img']; ?></p></td>
  </tr>
  <tr>
    <td><h1><?php echo $row_conteudo['titulo']; ?></h1></td>
  </tr>
  <tr>
    <td><?php echo $row_conteudo['conteudo']; ?></td>
  </tr>
</table></center>

</section>
</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php
mysql_free_result($conteudo);
?>
