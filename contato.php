<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];  
 ?>
<!--DOCTYPE html--> 	
<html lang="pt-br">
<head>
	<title>.::Contato::.</title>
	<meta charset="utf-8">
</head>
<body>
<?php
  $to = "oseiasdfreitas@gmail.com";
  $subject = "$assunto" ;
  $message = "<trong>Nome:</trong>$nome<br>
  <trong>Email:</trong>$email<br>
  <trong>Mensagem:</trong>$mensagem";
  $header = "From: $email Reply-to: $email";
  $header .="Content-Type: text/html; charset=utf-8";
  mail($to, $subject, $message, $header);
 ?>
<?php
  echo "Email enviado com Sucesso!";
  header("location:index.php")
 ?>
</body>
</html>