<!--DOCTYPE html--> 	
<html lang="pt-br">
<head>
	<title>.::Contato::.</title>
	<meta charset="utf-8">
</head>
<body>
<?php
  
  require_once"conexao/db.php";

  $buscar=$_GET['buscar'];
     $sql=mysql_query("SELECT * FROM produtos WHERE nome_produt LIKE '%".$buscar."%' ");
     
	 $row=mysql_num_rows($sql);
     
	 if($row > 0){
     while($linha=mysql_fetch_array($sql)){
      $nome_produt=$linha['nome_produt'];
	  $nome=$linha['img'];
	  $preco=$linha['preco'];
      
	  
	    echo "<div id='conteudo_result'>".
	           "<h5>Nome do Produto:</h5>"." ".@$nome_produt."<br/><br/>".
	           "<img src='arquivos/$nome'>"."<br/><br/>".
	           "<h5>Preço:</h5>"." ".@$preco."<a href='index.php' class='btn_result'>Voltar</a>".
		     "</div>";
	  
    }/* fecha o while*/
	
  } else{
     echo "<div class='mensagem'><h5>Desculpe, nenhum usuario com esse nome foi encontrado!</h5><br><a href='index.php' class='btn_result'>Voltar</a></div>";
     }

 ?>
</body>
</html>